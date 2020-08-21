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
Route::get('/categorias', 'CategoriaController@index');
Route::post('/categorias/save', 'CategoriaController@store');
Route::put('/categorias/update', 'CategoriaController@update');
Route::put('/categorias/desactivar', 'CategoriaController@desactivar');
Route::put('/categorias/activar', 'CategoriaController@activar');