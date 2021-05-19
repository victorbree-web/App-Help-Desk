<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeController extends Controller
{
    public function index(){

        return view('index');
    }

    public function abrir_chamado(){

        return view('abrir_chamado');
    }

    public function consultar_chamado(){

        return view('consultar_chamado');
    }

    public function home(){

        return view('home');
    }
}
