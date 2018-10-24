<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cris extends Model
{
    //
    protected $table='cris';
    public function ouaf(){
        return $this->belongsTo('App\zanimaux');
    }
}
