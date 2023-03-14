<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste (int $p1,$p2){
        //echo "a soma de $p1 + $p2 é".($p1+$p2);
       //array associativo abaixo
       // return view('site.teste',['p1' => $p1, 'p2' => $p2]);
   
       //return view('site.teste',compact('p1','p2'));//compact

        return view('site.teste')->with('xyz',$p1)->with('zz',$p2);//with()
    }
}
