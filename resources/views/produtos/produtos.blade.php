@extends('layout.app', ["current" => "produtos"])

@section("body")

    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de produtos</h5>

            @if(count($produtos)>0)

                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome Produto</th>
                            <th>Estoque</th>
                            <th>Preco</th>
                            <th>Categoria</th>
                            <th>Acoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $prod)
                            <tr>
                                <td>{{$prod->id}}</td>
                                <td>{{$prod->nome}}</td>
                                <td>{{$prod->estoque}}</td>
                                <td>{{$prod->preco}}</td>
                                <td>{{$prod->categoria_id}}</td>
                                <td>
                                    <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            <tr>
                        @endforeach
                    </tbody>
                </table>

            @endif

        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary">Novo Produto</a>
        </div>
    </div>

@endsection