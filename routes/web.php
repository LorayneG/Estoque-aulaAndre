<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
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
    return view('welcome');
});

//CRUD

//listar todos os produtos
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');


//create
Route::get('produto/create', [ProdutoController::class, 'create'])->name('produto.create');


//store
Route::post('produto/create', [ProdutoController::class, 'store'])->name('produto.store');


//edit
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');


//update
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.update');


//delete
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');

//exibe um produto
Route::get('/produto/{id}', [ProdutoController::class, 'show']);
 

//insere / criar um produto [POST]
Route::get('/produtostore', [ProdutoController::class, 'store']);
 
 
//alterar um produto [PUT]
Route::get('/produtoupdate', [ProdutoController::class,'update']);
 
 
//exclui um produto [DELETE]
Route::get('/produtodestroy{id}', [ProdutoController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//----------------------PRODUTO---------------------------


//---------------------CATEGORIA--------------------------


//listar todos as categorias
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');


//create
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');


//store
Route::post('/categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');


//edit
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');


//update
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');


//delete
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.delete');

//exibe um categoria
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
 

//insere / criar um categoria [POST]
Route::get('/categoriastore', [CategoriaController::class, 'store']);
 
 
//alterar um categoria [PUT]
Route::get('/categoriaupdate', [CategoriaController::class,'update']);
 
 
//exclui um categoria [DELETE]
Route::get('/categoriadestroy{id}', [CategoriaController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//---------------------CATEGORIA--------------------------
