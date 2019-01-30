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

    public function getIdade(){
        return "20 anos";
    }

    public function multiplicar($n1, $n2){
        return $n1*$n2;
    }

    public function getNomeByID($id){

        $v = ["Mario", "Edson", "Roberto", "Jean"];

        if($id >= 0 && $id < count($v)){
            return $v[$id];
        }
        return "Nao encontrado!";
    }
}