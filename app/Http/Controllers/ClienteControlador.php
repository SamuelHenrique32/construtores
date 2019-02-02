<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{

    public function index()
    {
        return "Lista de todos os clientes - Raiz";
    }


    public function create()
    {
        return "Formulario para cadastrar novo cliente";
        //return view('formulariocadastro'); se ja existir view
    }


    //request sao dados do formulario
    public function store(Request $request)
    {
        $s = "Armazenar: ";
        $s .= "Nome: " . $request->input('nome') . " e ";   //name do input e nome
        $s .= "Idade: " . $request->input('idade');
        return response($s, 201);
    }


    public function show($id)
    {
        $v = ["Mario", "Edson", "Roberto", "Jean"];

        if($id >= 0 && $id < count($v)){
            return $v[$id];
        }
        return "Nao encontrado!";
    }


    public function edit($id)
    {
        return "Formulario para editar cliente com ID " . $id;
    }


    //salvar os dados
    public function update(Request $request, $id)
    {

        $s = "Atualizar cliente com id $id: ";
        $s .= "Nome: " . $request->input('nome') . " e ";   //name do input e nome
        $s .= "Idade: " . $request->input('idade');
        return response($s, 200);
    }


    public function destroy($id)
    {
        return response("Apagado cliente com id $id", 200);
    }

    public function requisitar(Request $request){
        //receber via post
        echo "nome: " . $request->input('nome');
    }
}
