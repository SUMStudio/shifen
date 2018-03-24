<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $info = Test::find(1)->info;
        return view('test',compact('info'));

    }
    public function post(Request $request){
        dd($request->get('sada')."132135");
    }
    public function form(){
        return view('carpooling.create');
    }
}
