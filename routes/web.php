<?php

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

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/page-adm', function () {
    return view ('page-adm'); 
})->name('page-adm');

