<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zanimaux extends Model
{
    //
    protected $table='zanimaux';
    public function miaou() {
        return $this->hasMany('App\cris');
    }
}
