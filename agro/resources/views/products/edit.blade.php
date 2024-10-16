@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            
            <form action="{{ route('products.update', $product->id) }}" method="post" class="bg-white p-4 shadow-sm rounded-lg">
                <h1 class="mb-4">Editar Produto</h1>
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Preço</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                </div>
                
                <button type="submit" class="btn btn-success w-100" style="background-color: #00712D; border-color: #00712D;">
                    Salvar Alterações
                </button>
                <a class="btn w-100 mt-2" style="background-color: rgb(167, 147, 147); color: #fff" href="/products">Voltar</a>
            </form>
        </div>
    </div>
</div>
@endsection
