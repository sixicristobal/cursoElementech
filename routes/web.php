<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ArticuloController;


Route::get('/', function() {
    return view('bienvenida');
});

Route::get('/bienvenida', function () {
    return view('bienvenida');
});

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/crear', [UsuarioController::class, 'create']);

Route::get('/articulos/crearArticulos', [ArticuloController::class, 'create']);
Route::post('/articulos', [ArticuloController::class, 'store']);