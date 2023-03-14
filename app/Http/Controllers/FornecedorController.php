<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>[
                'nome'=>'nathan'
                ,'status'=>'n',
                'cnpj'=> '0',
                'ddd' => '11',//sao paulo
                'telefone'=> '000-000'
            ],
            1 =>['nome'=>'lucas',
            'status'=>'s',
            'cnpj'=> null,
            'ddd' => '',  //fortaleza
            'telefone'=> '777-777'
            ],
            2 =>['nome'=>'emanoel',
            'status'=>'s',
            'cnpj'=> 77777,
            'ddd' => '32',  //juiz de fora
            'telefone'=> '333-333'
            ]
            

        ];
        //condicao ? se verdadeira : se falso
        //condicao ? se verdade :(condicao ? se verdadeira : se falso);

        //$msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ nao informado';
        //echo $msg;

        return view('app.fornecedor.index', compact('fornecedores'));
  
    }
}
