@extends('templates.principal')

@section('container') 

    <h1>Adicionar Produto</h1>
    
    <form action="/produtos" method="post">
        
        @csrf
        
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Adicionar</button>
    
    </form>

@endsection
