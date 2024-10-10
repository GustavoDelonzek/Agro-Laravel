<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Lista de Produtos</h2>
    <a href="{{route('products.create')}}">Criar seu produto</a>
    <div class="row ">
    @foreach ($products as $product)
        <div class="col-4">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>R$ {{ number_format($product->price, 2, ',', '.') }}</p>
            <form action="{{ route('products.delete', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">DELETAR</button>
            </form>
            <a class="btn btn-primary" href="{{route('products.edit', $product->id)}}">Edite</a>

        </div>
    @endforeach
    </div>
    
@endsection
