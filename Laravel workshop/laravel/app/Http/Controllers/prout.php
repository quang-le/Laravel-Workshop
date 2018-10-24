<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\animals;
use App\habitat;
use App\cri;

class prout extends Controller
{
    public function show(){
        return view('template');
    }

    public function animal(){
        return animals::all();
    }

    public function withHabitat(){
        return animals::with('habitat')->get();
    }
}
