@extends('store.template')

@section('content')

<div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
        <h1><i class="fa fa-shopping-cart"></i>Detalle del Producto</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="product-block">
                <img src="{{ $product->image }}">
            </div>
        </div>

        <div class="col-md-6 text-center">
            <div class="product-block">
                <h3>{{ $product->name }}</h3> <hr>
                <hr>
                <div class="product-info panel">
                    <p>{{ $product->description }}</p>
                    <h3> <span class="badge badge-success">precio: ${{ number_format($product->price,2) }}</span> </h3>
                    <p>
                        <a class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug) }}">Comprar <i class="fa fa-cart-plus fa-2x"></i></a>
                        <hr>
                    </p>
                </div>        
            </div>
        </div>
    </div>
</div>    
    <p><a class="btn btn-primary" href="{{ route('home') }}"> <i class="fa fa-chevron-circle-left"></i> Regresar</a></p>    
@stop