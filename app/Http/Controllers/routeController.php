<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamados;

class routeController extends Controller
{


    public function abrir_chamado(){

        return view('abrir_chamado');
    }

    public function consultar_chamado(){

        $chamado = Chamados::all();

        return view('consultar_chamado',['chamados' => $chamado]);
    }

    public function home(){

        return view('home');
    }
    public function store(Request $request){

        $chamado = new Chamados;

        $chamado->titulo= $request->titulo; 
        $chamado->categoria= Hash::make($request->categoria); 
        $chamado->descricao= $request->descricao;
        
        $chamado->save();

        return redirect('/home')->with('msg', 'Chamado aberto com sucesso!');
    }
}
