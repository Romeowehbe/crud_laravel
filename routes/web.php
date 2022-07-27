<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoristaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/motorista/novo', [MotoristaController::class,'create'])->name('novo_motorista');
Route::post('/motorista/novo', [MotoristaController::class,'store'])->name('cadastrar_motorista');
Route::get('/motorista/show', [MotoristaController::class,'show'])->name('motorista.show');
Route::get('/motorista/edit/{id}', [MotoristaController::class,'edit'])->name('editar_motorista');
Route::post('/motorista/edit/{id}', [MotoristaController::class,'update'])->name('atualizar_motorista');
Route::get('/motorista/delete/{id}', [MotoristaController::class,'delete']);
Route::post('/motorista/delete/{id}', [MotoristaController::class,'destroy'])->name('excluir_motorista');
