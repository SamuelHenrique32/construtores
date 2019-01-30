<?php

namespace App\Http\Controllers;

//necessario para metodos que nao o GET
use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    //recebera requisicao
    public function getNome(){
        return "Jose da Silva";
    }
}