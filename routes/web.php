<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route::get      => consultar
 * Route::post     => Guardar
 * Route::delete   => Eliminar
 * Route::put      => Actulizar
 * 
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return "Bienvenido a mi Blog";
});

Route::get('/blog/{word}', function ($word) {
    return $word;
});

Route::get('/buscar', function (Request $request) {
    return $request->all();
});
