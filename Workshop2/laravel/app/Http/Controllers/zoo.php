<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\zanimaux;
use App\cris;

class zoo extends Controller
{
    //

    public function crazyZoo(){
        return cris::with('ouaf')->get();
    }

    public function display(){
        return view('zoochild', ['animaux'=>zanimaux::all()]);
    }
}
