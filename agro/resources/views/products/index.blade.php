<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    
    
    <div class="row mt-4 bg-white d-flex justify-content-center p-4">

        @if($products->isEmpty())
        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <h3><i class="fa fa-box"></i> Sem produtos cadastrados!</h3>
            <a class="btn btn-success" href="{{ route('products.create') }}">Criar seu produto</a>
        </div>
        @endif
    @foreach ($products as $product)
        
        @if ($loop->first)
        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <h3><i class="fa fa-box"></i> Produtos ({{$loop->count}})</h3>
            <a class="btn btn-success" href="{{route('products.create')}}">Criar seu produto</a>
        </div>
        @endif
        <div class="card p-0 card-produto col-md-10 m-2">
            <div class="row g-0">
                <div class="col-md-12">
                <div class="card-body d-flex  justify-content-between">
                    <div >
                   
                    <h5 class="card-title"> {{ $product->name }}</h5>
                   
                
                    <p class=" card-text">{{ $product->description }}</p>
                    </div>
            
            
                    <div class="text-end">
                        <p class="card-text" style="color: #008000; font-size: 18px;">
                            R$ {{ number_format($product->price, 2, ',', '.') }}
                        </p>
                        <form action="{{ route('products.delete', $product->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger me-2" type="submit"><small>Excluir</small></button>
                        </form>
                        <a class="btn btn-outline-success" href="{{route('products.edit', $product->id)}}"><small>Editar</small></a>
                    </div>
                </div>
                </div>
            </div>
            </div>
      
    @endforeach
    
        
      
    </div>
    
@endsection
