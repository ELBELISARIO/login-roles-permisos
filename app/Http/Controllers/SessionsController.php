<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //Método que returna una vista login ubicada dentro del directorio auth
    public function create(){
        
        return view('auth.login');
    }
}
