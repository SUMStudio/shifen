<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class MarketController extends Controller
{

    public function trade(){
        return view('market.trade');
    }
}
