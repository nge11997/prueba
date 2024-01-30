<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //creamos un metodo simple
    public function index(Request $peticion){
        $arreglo = ['nombre' =>$peticion->query('nombre', 'sin nombre')];
        return view('vista1')->with($arreglo);
    }
}
