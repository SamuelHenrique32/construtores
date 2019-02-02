<?php

Route::get('/', function () {
    return view('welcome');
});

//ir para controlador e chama getNome
Route::get('/nome', 'MeuControlador@getNome');

Route::get('/idade', 'MeuControlador@getIdade');

//parametros para controlador
Route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::get('/nomes/{id}', 'MeuControlador@getNomeByID');

Route::resource('/cliente','ClienteControlador');

Route::post('/cliente/requisitar', 'ClienteControlador@requisitar');