<?php

use App\Http\Controllers\CadInstrutoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/painel', [UsuarioController::class, 'login'])->name('usuario.login');
Route::get('/instrutores', [CadInstrutoresController::class, 'index'])->name('instrutores.index');
