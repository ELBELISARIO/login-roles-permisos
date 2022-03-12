<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Incluyendo el modelo User para poder gestionar algunos métodos.
use App\Models\User;

class RegisterController extends Controller
{
    //Método que returna una vista register ubicada dentro del directorio auth
    public function create(){

        return view('auth.register');
    }

    public function store(){

        //La variable $user se le asigna un nuevo usuario del modelo User creado apartir de los datos del formulario que se recibe.
        $user = User::create(request(['name', 'email', 'password']));
        //Despues de registrar inicia sesion con el $user
        auth()->login($user);
        //Dirige a la página de bienvenida.
        return redirect()->to('/');
    }
}
