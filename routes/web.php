<?php

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

Route::get('/', function () {
    return view('index');
});
//CATEGORIAS
Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/categorias/novo', 'ControladorCategoria@create');
Route::post('/categorias/novo', 'ControladorCategoria@store');
Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy');
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');
Route::post('/categorias/editar/{id}', 'ControladorCategoria@update');
//PRODUTOS
Route::get('/produtos', 'ControladorProduto@index');
Route::get('/produtos/novo', 'ControladorProduto@create');
Route::post('/produtos/novo', 'ControladorProduto@store');
Route::get('/produtos/apagar/{id}', 'ControladorProduto@destroy');
Route::get('/produtos/editar/{id}', 'ControladorProduto@edit');
Route::post('/produtos/editar/{id}', 'ControladorProduto@update');


//Parametro opcional = rota/{$param?}

/*Rotas com regras
Add no final da rota:
->where('nome_param', 'regex')
Se houver mais parametros que precisam de regras, só chamar o where novamente

Adicionar CSRF token nos forms, escrever dentro do form: @csrf
Adicionar método além do POST, escrever dentro do form: @method('PUT ou PATCH')

Sempre nomear as rotas para facilitar ->name('nome.rota');
Nos links e forms: {{rute('nome.rota')}}

Checando rota ativa dentro do blade para add class active via operador ternario:
{{request()->routeIs('nome.rota ou rota.*') ? 'active' : ''}}

Blade Components (para alertas, por exemplo)
criar component: componente.blade.php com o seguinte dentro:
    html com as vars entre {{}} e usar a var {{$slot}} para o html a ser passado caso haja
Para usar o compronent criado:
    @component('caminho.component', ['var1'=> $varOUvalor, 'var2' => $varOUvalor])
    <p>HTML A SER INJETADO NA VAR $SLOT<p>
    @endcomponent
Dá pra registrar o component na função boot do AppServiceprovider, pra setar um nome pra ele e chamado por tal

Tips VS Code:
Para selecionar todas as palavras: seleciona uma palavra desejada e pressiona Ctrl + F2

div>ul>li>*4

Soft Deletes
