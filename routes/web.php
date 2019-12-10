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
    return view('welcome');
});
Route::resource('acampamentos', 'AcampamentoController');
// Route::get('/acampamentos', 'AcampamentoController@index');
// Route::get('/acampamentos/criar', 'AcampamentoController@create');
// Route::post('/acampamentos', 'AcampamentoController@store');
