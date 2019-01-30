<?php

Route::get('/', function () {
    return view('welcome');
});

//ir para controlador e chama getNome
Route::get('/nome', 'MeuControlador@getNome');