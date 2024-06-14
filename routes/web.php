<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AlunoController; // Importar o controlador de Aluno

Route::get('/', function () {
    return view('welcome');
});

// Rota para mostrar mensagem
Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

// Rotas resource para Cliente e Aluno
Route::resources([
    'cliente' => ClienteController::class,
    'aluno' => AlunoController::class, // Adicionar resource para Aluno
]);

// Rota para exibir o formulário de exclusão de Cliente
Route::get('/cliente/{id}/delete', [ClienteController::class, 'delete']);

// Rota para exibir o formulário de exclusão de Aluno
Route::get('/aluno/{id}/delete', [AlunoController::class, 'delete']); // Adicionar a rota delete para Aluno
