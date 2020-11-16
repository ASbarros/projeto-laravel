<?php

namespace App\Http\Controllers;

use App\Models\instrutore;
use Illuminate\Http\Request;

class CadInstrutoresController extends Controller
{
    public function index()
    {
        $tabela = instrutore::orderby('id')->paginate();
        return view('painels.painel-admin.instrutores.index', ['itens' => $tabela]);
    }
}
