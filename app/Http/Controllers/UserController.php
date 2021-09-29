<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\User;

class UserController extends Controller
{
    public function store(Request $request){
        $user=new User();
        $user->nome=$request->nome;
        $user->apelido=$request->apelido;
        $user->contacto=$request->contacto;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->bi=$request->bi;
        $user->dataNascimento=$request->dataNascimento;
       
        if( $user->save()){
            return view('inscricao');
        } else
        {
          return 'Erro ao tentar gravar';  
        }
       
        


    }

    public function lista(){  

        $listaUsers=User::all();
        return view('userDetais',compact('listaUsers'));
    }
}
