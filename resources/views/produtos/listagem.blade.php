@extends('templates.principal')

@section('container')
    <h1>Listagem de produtos</h1>
    <table class="table">
        @foreach ($produtos as $p)
            <tr>
                <td>{{ $p->nome }}</td>
                <td>{{ $p->descricao }}</td>
                <td><a href="/produtos/{{$p->id}}">Visualizar</td>
                <td><a href="/produtos/{{$p->id}}/remove">Remover</a></td>
            </tr>
        @endforeach
    </table>
@endsection