<?php

namespace App;

use Hash;
use App\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */

    use DatabaseMigrations;

    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    public function addUser(){
        $user = new User([
            'name' => 'Test',
            'email' => 'test@email.com',
            'password' => '123456',
            'nik' => '393870',
        ]);

        $user->save();
    }

    protected function login($user_id = 1){   
        $this->addUser();

        $user = User::find($user_id);
        $this->token = JWTAuth::fromUser($user);

        JWTAuth::setToken($this->token);

        Auth::login($user);

        $this->serverVariables = [
            'Authorization' => 'Bearer '. $this->token
        ];

        $this->header = [
            'Authorization' => 'Bearer '. $this->token
        ];
    }

    public function setUp(){
        parent::setUp();
        $this->login();

    }

    public function testHeaderExist(){

        $this->assertTrue(is_array( $this->header) );
        $this->assertTrue($this->token !== null );
    }
}