<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/api/marcas', 'MarcaController');
Route::apiResource('/api/medidas', 'MedidaController');
Route::apiResource('/api/categorias', 'CategoriaController');

Route::get('/', function () {
    return view('welcome');
});
