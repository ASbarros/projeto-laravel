<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/painel', [UsuarioController::class, 'login'])->name('usuario.login');
