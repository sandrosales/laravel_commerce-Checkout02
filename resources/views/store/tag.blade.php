@extends('store.store')

@section('categories')
    @include('store.detalhes.categories')
@stop

@section('content')
    <div class="features_items"><!--recommended-->
        <h2 class="title text-center">Produtos Relacionados a {{ $tag->name }}</h2>

        @include('store.detalhes.product', ['products' => $tag->products])

    </div>
    <!--recommended-->

    </div>
@stop