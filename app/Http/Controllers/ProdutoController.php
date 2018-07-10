<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use estoque\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;

class ProdutoController extends Controller {
    
    public function lista() {
        
        $produtos = Produto::all();
        return view('produtos.listagem',['produtos' => $produtos]);
        
    }

    public function mostra($id) {
        $p = Produto::find($id);
        return view('produtos.detalhes',['p' => $p[0]]);

        if (empty($p)) {
            return 'Num tem nada';
        }
    }

    public function novo () {
        return view('produtos.novo');
    }

    public function adiciona(ProdutoRequest $request) {
        Produto::create($request->all());
        return redirect()->action('ProdutoController@lista')->with('message', 'Produto adicionado com sucesso');
    }

    public function remove($id) {
        Produto::find($id)->delete();
        return redirect()->action('ProdutoController@lista')->with('message', 'Produto removido com sucesso');
    }

}