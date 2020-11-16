<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('painels.painel-admin.index');
    }
    public function edit(Request $request, usuario $usuario)
    {

        $usuario->nome = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->email = $request->email;
        if ($request->senha) $usuario->senha = $request->senha;
        $usuario->update();
        return redirect()->route('admin.index');
    }
}
