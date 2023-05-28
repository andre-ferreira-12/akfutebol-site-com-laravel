<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;

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

/*Route::get('/', function () {
    return view('index');
})->name('inicio');*/

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/adm-page', function () {
    return view ('adm-page'); 
})->name('adm-page');


//rotas  Noticias
Route::get('/', [NoticiasController::class, 'index'])->name('inicio');
Route::get('/cadastro-noticia', [NoticiasController::class, 'abrirCadastro'])->name('cadastro-noticia');
Route::post('/enviar-noticia', [NoticiasController::class, 'cadastrarNoticia'])->name('enviar-noticia');
Route::get('/consultar-noticia', [NoticiasController::class, 'consultarNoticia'])->name('consultar-noticia');