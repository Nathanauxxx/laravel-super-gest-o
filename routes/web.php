<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/', function () {
    return 'ola ,seja bem vindo ao curso';
});
*/

Route::get('/','PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos','SobrenoslController@sobreNos')->name('site.sobrenos');

Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::post('/contato','ContatoController@contato')->name('site.contato');

Route::get('/login',function(){return 'Login';})->name('site.login');




Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){return 'Clientes';})->name('site.clientes');
    Route::get('/fornecedores','FornecedorController@index')->name('site.fornecedores');
    Route::get('/produtos',function(){return 'Produtos';})->name('site.produtos');
});

Route::fallback(function(){
    echo 'a rota acessada nao existe.<a href="'.route('site.index').'">clique aqui</a>clique aqui para ir para a pagina inicial';
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');























/*


Route::get('/rota2',function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

/*
Route::redirect('/rota2','/rota1');
/*
/*

*/
//ao cair na rota 1 ele ira redirecionar para a rota 2
//nome,categoria,assunto,mensagem
//se botar depois do parametro{mensagem?} o ponto de interrogação ele se tornara opção voce pode ou nao colocar na url ou em outro metodo
/*
Route::get(
    '/contato/{nome}/{categoria_id}',//
    function(string $nome = 'desconhecido',
    int $categoria_id = 1 // - 'informação'
  
    ){
        echo "estamos aq: $nome - $categoria_id";
    }
)->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');//where e onde
*/
//alen dos verbos http temos
//get
//post
//put
//delete