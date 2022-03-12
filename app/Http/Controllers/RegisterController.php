<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Método que returna una vista register ubicada dentro del directorio auth
    public function create(){

        return view('auth.register');
    }
}
