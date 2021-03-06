<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $senha = $request->senha;


        $usuarios = usuario::where('email', $email)->where('senha', $senha)->first();

        /// '@' verifica se nulo, nao precisa de if
        if (@$usuarios->id != null) {
            @session_start();
            $_SESSION['id_usuario'] = $usuarios->id;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario'] = $usuarios->nivel;
            $_SESSION['cpf_usuario'] = $usuarios->cpf;

            if ($_SESSION['nivel_usuario'] == 'admin') {
                return view('painels.painel-admin.index');
            }
            if ($_SESSION['nivel_usuario'] == 'instrutor') {
                return view('painels.painel-instrutor.index');
            }
            if ($_SESSION['nivel_usuario'] == 'recepcao') {
                return view('painels.painel-recepcao.index');
            }
        } else {
            echo "<script language='javascript'> window.alert('Dados Incorretos') </script>";
            return view('index');
        }
    }
    public function logout()
    {
        @session_start();
        @session_destroy();
        return view('index');
    }
}
