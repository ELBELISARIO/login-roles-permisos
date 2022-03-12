<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    //Método que returna una vista login ubicada dentro del directorio auth
    public function create(){
        
        return view('auth.login');
    }

    //Método de logueo.
    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);

        } 
        return redirect()->to('/');
    }

    //Método para cerrar la sesión y nos lleva a la página de inicio.
    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
