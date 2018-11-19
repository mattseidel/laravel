<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wellcomeUserController extends Controller
{
    public function __invoke($name, $nickname = null){
        if($nickname==null){
            return "Bienvenido {$name}";
        }
        else {
            return " Bienvenido {$name}, alias {$nickname}";
        }   
    }
}
