<?php

use Illuminate\Support\Facades\Route;

//5to. Paso: Agregando los controladores para posterior uso con las rutas.
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


Route::get('/', function () {
    //Se sustituyó la ruta por default de welcome por la nueva página que se creó (home.blade.php)
    return view('home');
});

//Enrutamiento de controladores con vistas
//El usuario ingresa la url (/register u otro), la url lo enlaza al controlador(RegisterController u otro) mediante el método definido(create u otro) y el método returna algo en este caso una vista.
Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::get('/login', [SessionsController::class, 'create'])->name('login.index');

//Enrutamiento de register.blade.php con el método store RegisterController
//Los datos que trae register.blade.php los manda al método store. 
Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
