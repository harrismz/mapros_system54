<?php

namespace App\Api\V1\Controllers;

use Config;
use App\Board;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\BoardRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Request;
use App\Api\V1\Traits\LoggerHelper;
use App\Api\V1\Helper\Node;
use Dingo\Api\Exception\StoreResourceFailedException;
use Carbon\Carbon;

class MainController extends Controller
{
    use LoggerHelper;

    protected $allowedParameter = [
        'board_id',
        'nik',
        'ip',
        'is_solder'
    ];

    protected $returnValue = [
        'success' => true,
        'message' => 'data saved!'
    ];

    private function getParameter (BoardRequest $request){
        $result = $request->only($this->allowedParameter);

        // setup default value for ip 
        $result['ip'] = (!isset($result['ip'] )) ? $request->ip() : $request->ip ;
        // setup default value for is_solder is false;
        $result['is_solder'] = (!isset($result['is_solder'] )) ? false : $request->is_solder ;

        return $result;
    }

    /*
    *
    * $currentStep must contains created_at && std_time
    *
    */
    private function isMoreThanStdTime($currentStep){
        $now = Carbon::now();
        $lastScanned = Carbon::parse($currentStep['created_at']);

        // it'll return true if timeDiff is greater than std_time;
        return ( $now->diffInSeconds($lastScanned) > $currentStep['std_time'] );
    }

    public function store(BoardRequest $request ){
    	$parameter = $this->getParameter($request);
        // cek apakah board id atau ticket;
        $node = new Node($parameter);
        
        // return $node->getModelType();

        if ($node->getModelType() == 'board') {
            return $this->processBoard($node);
        }

        if($node->getModelType() == 'board'){
            return 'critical';
        }

        if($node->getModelType() == 'ticket'){
            return $this->runProcedureTicket($node);
        }

    }

    private function processBoard(Node $node){
        // cek current is null;
        if(!$node->isExists()){ //board null
            // cek kondisi sebelumnya is null

            $prevNode = $node->prev();
            if( $prevNode->getStatus() == 'OUT' ){
                
                // we not sure if it calling prev() twice or not, hopefully it's not;
                if($prevNode->getJudge() !== 'NG'){
                    // cek repair 
                    // $prevNode->existsInRepair(); //not implement yet
                    /*if($prevNode->existsInRepair()){

                    }*/
                    $node = $prevNode->next();
                    $node->setStatus('IN');
                    $node->setJudge('OK');
                    if(!$node->save()){
                        throw new StoreResourceFailedException("Error Saving Progress", [
                            'message' => 'something went wrong with save method on model! ask your IT member'
                        ]);
                    };
                    return $this->returnValue;
                }
            }

            if( $prevNode->getStatus() == 'IN' ){
                // error handler
                if($prevNode->getModelType() !== 'board'){
                    throw new StoreResourceFailedException("DATA NOT SCAN OUT YET!", [
                        'message' => 'bukan board',
                        'note' => json_decode( $prevNode, true )
                    ]);
                }

                // cek apakah solder atau bukan
                if (!$node->is_solder) { //jika solder tidak diceklis, maka
                    throw new StoreResourceFailedException("DATA NOT SCAN OUT YET!", [
                        'message' => 'bukan solder',
                        'note' => json_decode( $prevNode, true )
                    ]);    
                }
                
                if($prevNode->isExists()){
                    throw new StoreResourceFailedException("DATA ALREADY SCAN OUT!", [
                        'message' => '',
                        'note' => json_decode( $prevNode, true )
                    ]);    
                };

                $node = $prevNode->next();
                $node->setStatus('OUT');
                $node->setJudge('SOLDER');
                if(!$node->save()){
                    throw new StoreResourceFailedException("Error Saving Progress", [
                        'message' => 'something went wrong with save method on model! ask your IT member'
                    ]);
                    
                };
                return $this->returnValue;
            }

            // jika get status bukan in atau out maka throw error
            throw new StoreResourceFailedException("DATA NOT SCAN IN PREVIOUS STEP", [
                'node' => json_decode( $prevNode, true )
            ]);
        }

        // disini node sudah exists
        if($node->getStatus() == 'OUT'){
            if($node->is_solder == false){
                throw new StoreResourceFailedException("DATA ALREADY SCAN OUT!", [
                    'node' => json_decode( $node, true )
                ]);    
            }

            //isExists already implement is solder, so we dont need to check it again.
            //if the code goes here, we save to immediately save the node;

            $node->setStatus('IN');
            $node->setJudge('SOLDER');
            if(!$node->save()){
                throw new StoreResourceFailedException("Error Saving Progress", [
                    'message' => 'something went wrong with save method on model! ask your IT member'
                ]);
            } 
            
            return $this->returnValue;
        }

        // return $node->getStatus();
        if($node->getStatus() == 'IN'){

            $currentStep = $node->getStep();
            if($node->is_solder){
                throw new StoreResourceFailedException("DATA ALREADY SCAN IN!", [
                    'message' => 'you already scan solder with this scanner!'
                ]);

            }

            // we need to count how long it is between now and step->created_at
            if( !$this->isMoreThanStdTime($currentStep)){
                // belum mencapai std time
                throw new StoreResourceFailedException("DATA ALREADY Scan IN", [
                    'message' => 'you scan within std time '. $currentStep['std_time']. ' try it again later'
                ]);
            }
            
            // save
            $node->setStatus('OUT');
            $node->setJudge('OK');
            if(!$node->save()){
                throw new StoreResourceFailedException("Error Saving Progress", [
                    'message' => 'something went wrong with save method on model! ask your IT member'
                ]);
            } 
            
            return $this->returnValue;
        }
    }

    private function runProcedureTicket(Node $node){
        if( !$node->isTicketGuidGenerated()){
            return $node->generateGuid();
        };
    }
    
    
}
