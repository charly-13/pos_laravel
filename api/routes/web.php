<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'api'],function(){
Route::apiResource('/marcas', 'MarcaController');
Route::apiResource('/medidas', 'MedidaController');
Route::apiResource('/categorias', 'CategoriaController');
Route::apiResource('/articulos', 'ArticuloController');
Route::apiResource('/documentos','DocumentoController');
});

Route::get('/', function () {
    return view('welcome');
});