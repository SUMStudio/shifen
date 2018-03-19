<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarpoolingController extends Controller
{
    public function index(){
        return view("carpooling.index");
    }

    public function create(){
        return view("carpooling.create");
    }

}
