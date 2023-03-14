<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobrenoslController extends Controller
{
    public function sobreNos(){
        return view('site.sobre-nos');
    }
}
