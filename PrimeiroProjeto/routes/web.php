<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use App\Http\Controllers\ExercicioController;


Route::get('/paginainicial', function () {
    return view('welcome');
});

Route::get('/exercicio',[ExercicioController::class, 'exibirFormulario'] );
Route::post('/resposta',[ExercicioController::class, 'calcularSoma'] );

// rota para abrir o formulario do exercicio 2 e a outra para enviar os dados do exercício 2
Route::get('/exercicio2',[ExercicioController::class, 'exibirFormulario2'] );
Route::post('/resposta2',[ExercicioController::class, 'calcularSub'] );