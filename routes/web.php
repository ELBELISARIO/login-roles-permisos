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


//Ojo los name .store de ambas rutas en este caso no se utilizan se accede a los métodos gracias  al método POST que indica que el formulario lleva datos.
//Enrutamiento de register.blade.php con el método store RegisterController
//Los datos que trae register.blade.php los manda al método store.
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
//Enrutamiento de login.blade.php con método store de SessionController.
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');


//Enrutamiento de app.blade.php con el método destroy de SessionsController
//Nota: La /logout no se ocupa... Se accede al método destroy por el name login.destroy de la view home.blade.php
Route::get('/logout', [SessionsController::class, 'destroy']) ->middleware('auth') ->name('login.destroy');
