@extends('layout.app', ["current" => "produtos"])

@section("body")
    
    <div class="card border">
        <div class="card-body">

            <form action="/produtos/editar/{{$prod->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" value="{{$prod->nome}}" id="nomeProduto" placeholder="Produto">
                </div>
                <div class="form-group">
                    <label for="estoqueProduto">Estoque</label>
                    <input type="number" class="form-control" name="estoqueProduto" value="{{$prod->estoque}}" id="estoqueProduto" placeholder="Estoque">
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preco</label>
                    <input type="number" class="form-control" name="precoProduto" value="{{$prod->preco}}" id="precoProduto" placeholder="Preco">
                </div>
                <div class="form-group">
                    <label for="categoriaProduto">Categoria</label>
                    <select class="form-control" name="categoriaProduto" id="categoriaProduto">
                        <option></option>
                        @foreach($categorias as $cat)
                            <option value="{{$cat->id}}" @if($prod->categoria_id == $cat->id) selected @endif>{{$cat->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>

        </div>
    </div>

@endsection