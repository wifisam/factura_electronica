<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ruta de tipo resource 
Route::resource('almacen/categoria', 'categoriaController');