<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pruebas(Request $request){

        return "accion de pruebas de user-controller";
    }

    public function register(Request $request){
    

        $name =$request->input('name');
        $surname=$request->input('surname');

        return "accion de registro de usuario {$name} ---- {$surname}";
    }
 


    public function login(Request $request){
        return "accion de login de usuario ";
        
    }
}
