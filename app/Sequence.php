<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use App\BaseModel as Model; //it already use the traits logger;

class Sequence extends Model
{
    protected $table = 'sequences';
}
