<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){

        if(request()->has('empty')){
            $users=[];
        }else{
     
            $users = [
                    'Joel','Camilo','Eliana','Manuela'
                    ];
        }
        $tittle = 'Listado de usuarios';

        //dd(compact('tittle', 'users'));

        return view('user', compact('users','tittle'));
    }

    public function show($id){
        $tittle= 'Detalles del usuario';
        return view('user-show',compact('id', 'tittle'));
    }

    public function create(){
        return view('user-create');
    }

    
}
