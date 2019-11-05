<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item @if($current == "home") active @endif">
                <a class="nav-link" href="/">Home</span></a>
            </li>
            <li class="nav-item @if($current == "produtos") active @endif">
                <a class="nav-link" href="/produtos">Produtos</span></a>
            </li>
            <li class="nav-item @if($current == "categorias") active @endif">
                <a class="nav-link" href="/categorias">Categorias</span></a>
            </li>
        </ul>
    </div>
</nav>