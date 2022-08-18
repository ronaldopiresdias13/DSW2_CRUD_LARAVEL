<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create(){
        return view("produtos.create");
    }

    public function store(Request $request){
        Produto::create([
            "nome"=> $request->nome,
            "custo"=> $request->custo,
            "preco"=> $request->preco,
            "quantidade"=> $request->quantidade,
        ]);

        return "Produto Criado com sucesso!!";
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return view("produtos.show", ['produto' => $produto]);
    }
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view("produtos.edit", ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        return "Produto Atualizado com Sucesso!!";
    }

    public function delete($id)
    {
        $produto = Produto::find($id);
        return view("produtos.delete", ['produto' => $produto]);
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return "produto Excluido com sucesso";
    }
}

