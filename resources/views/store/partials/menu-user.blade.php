@if(Auth::check())
    <div class="dropdown" style="position:absolute; right:10%; top:30%; vertical-align='middle'">
        <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user"></i>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href=" {{ route('logout') }} ">Finalizar Sesión</a>                
        </div>
    </div>       

@else

<div class="dropdown" style="position:absolute; right:10%; top:30%; vertical-align='middle'">
        <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user"></i>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a href="{{ route('login') }}" class="dropdown-item">Iniciar Sesión</a>                
        </div>
    </div>  

@endif