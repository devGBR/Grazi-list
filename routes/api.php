<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/todo', [TarefasController::class, 'index']);

Route::post('/create-aba', [TarefasController::class, 'createAba']);
Route::post('/create-tarefa', [TarefasController::class, 'store']);

Route::get('/completar-task/{id}' , [TarefasController::class, 'completarTask']);
Route::get('/refazer-task/{id}' , [TarefasController::class, 'refazerTask']);

Route::get('/excluir-task/{id}' , [TarefasController::class, 'deleteTask']);
Route::get('/excluir-aba/{id}' , [TarefasController::class, 'deleteAba']);

