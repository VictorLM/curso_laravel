@extends('layout.app', ["current" => "home"])

@section("body")
    
    <div class="jumbotron bg-light border border-secondary">
        
        <div class="row">

            <div class="card-deck">

                <div class="card border border-primary">

                    <h5 class="title">Cadastro de Produtos</h5> 
                    <p class="card-text">
                        Aqui voce cadastra todos os seus produtos...
                        Cadastrar as categorias previamente.
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
        
                </div>

                <div class="card border border-primary">

                    <h5 class="title">Cadastro de Categorias</h5> 
                    <p class="card-text">
                        Aqui voce cadastra todos as seus categorias...
                    </p>
                    <a href="/categorias" class="btn btn-primary">Cadastre seus produtos</a>
        
                </div>
    
            </div>

        </div>

    </div>

@endsection