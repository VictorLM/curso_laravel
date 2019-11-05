@extends('layout.app', ["current" => "produtos"])

@section("body")
    
    <div class="card border">
        <div class="card-body">

            <form action="/produtos/novo" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome Produto</label>
                    <input type="text" class="form-control @error('nomeProduto') is-invalid @enderror" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                    @foreach ($errors->get('nomeProduto') as $message)
                        <div class="invalid-feedback">{{$message}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="estoqueProduto">Estoque</label>
                    <input type="number" class="form-control @error('estoqueProduto') is-invalid @enderror" name="estoqueProduto" id="estoqueProduto" placeholder="Estoque">
                    @foreach ($errors->get('estoqueProduto') as $message)
                        <div class="invalid-feedback">{{$message}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preco</label>
                    <input type="number" class="form-control @error('precoProduto') is-invalid @enderror" name="precoProduto" id="precoProduto" placeholder="Preco">
                    @foreach ($errors->get('precoProduto') as $message)
                        <div class="invalid-feedback">{{$message}}</div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="categoriaProduto">Categoria</label>
                    <select class="form-control @error('categoriaProduto') is-invalid @enderror" name="categoriaProduto" id="categoriaProduto">
                        <option></option>
                        {{-- RETORNANDO VIA AJAX
                        @foreach($categorias as $cat)
                            <option value="{{$cat->id}}">{{$cat->nome}}</option>
                        @endforeach
                        --}}
                    </select>
                    @foreach ($errors->get('categoriaProduto') as $message)
                        <div class="invalid-feedback">{{$message}}</div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>

        </div>
        @if($errors->any())
            <div class="card-footer">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            </div>
        @endif
    </div>

@endsection

@section('js')

<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function carregarCategorias(){
        $.getJSON("/api/categorias", function(data){
            for(i=0;i<data.length; i++){
                opcao = '<option value="' + data[i].id + '">' + data[i].nome  + '</option>'
                $('#categoriaProduto').append(opcao);
            }
        });
    }

    $(function(){
        carregarCategorias();
    });
</script>
    
@endsection