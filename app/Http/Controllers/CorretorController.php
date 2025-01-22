<?php

namespace App\Http\Controllers;

use App\Models\Corretor;
use Illuminate\Http\Request;

class CorretorController extends Controller
{
    public function index(Request $req){
        $corretor = Corretor::all();
        return view('welcome')->with("corretor", $corretor);
    }

    public function adicionar(Request $req){
        $corretor = new Corretor;
        $corretor->nome = $req->nome;
        $corretor->creci = $req->creci;
        $corretor->cpf = $req->cpf;
        $corretor->save();
        return redirect()->back();
    }

    public function editar(Request $req){
        $corretor = Corretor::find($req->id);
        return view('editar')->with("corretor", $corretor);
    }

    public function atualizar(Request $req){
        $corretor = Corretor::find($req->id);
        $corretor->update(
            [
                "nome" => $req->nome,
                "creci" => $req->creci,
                "cpf" => $req->cpf
            ]
        );
        return redirect('/');
        
    }

    public function excluir(Request $req){
        $corretor = Corretor::find($req->id);
        $corretor->delete();
        return redirect()->back();
    }
}
