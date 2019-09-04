<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand main-title" href="{{ route('home') }}">SRA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
        <p class="navbar-text">Mi Tienda Virtual</p>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i> <span class="sr-only">(current)</span></a>
        </li>
      
        <li class="nav-item active">
            <a class="nav-link" href=" {{ route('home') }} ">Inicio <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href=" {{ route('register') }} ">Registro <span class="sr-only">(current)</span></a>
        </li>

        
        @include('store.partials.menu-user')
    </ul>  
  </div>
</nav>