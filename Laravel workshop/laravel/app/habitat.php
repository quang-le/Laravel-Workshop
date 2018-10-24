<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class habitat extends Model

{

    protected $table='habitat';
    public function animals(){
        return $this->hasMany('App\animals');
    }
}
