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
    return view('welcome');
});
Route::get('consulta', 'ConsultaController@insertar');
Route::get('funci', 'FuncionesController@insertar');
Route::get('cliente', 'ClientController@insertar');
Route::get('compra','CompraController@insertar');
Route::get('compradetalle','CompradetalleController@insertar');

Route::get('comdeta','CompradetalleController@actualizar');
Route::get('clienactu','ClientController@actualizar');
Route::get('compraactu','CompraController@actualizar');
Route::get('funciactu', 'FuncionesController@actualizar');
