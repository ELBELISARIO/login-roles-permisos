<?php

use Illuminate\Support\Facades\Route;

//5to. Paso: Agregando los controladores para posterior uso con las rutas.
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


Route::get('/', function () {
    return view('welcome');
});
