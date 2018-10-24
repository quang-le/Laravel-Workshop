<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class animals extends Model
{
    //
    protected $table='animals';
    public function habitat(){
        return $this->belongsTo('App\habitat');
    }
}
