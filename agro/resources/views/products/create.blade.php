@extends('layouts.app')

@section('content')
<div class="container mt-4">
   
    
    <form action="{{ route('products.store') }}" method="post" class="bg-white p-4 shadow-sm rounded-lg">
        <h1 class="mb-4">Criar Produto</h1>
        @csrf
        
        <div class="form-group mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" required placeholder="Nome do Produto">
        </div>
        
        <div class="form-group mb-3">
            <label for="description" class="form-label">Descrição:</label>
            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Descrição do Produto"></textarea>
        </div>
        
        <div class="form-group mb-3">
            <label for="price" class="form-label">Preço:</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" required placeholder="Preço do Produto">
        </div>

        <button type="submit" class="btn btn-success w-100" style="background-color: #00712D; border-color: #00712D;">
            Salvar
        </button>
        <a class="btn w-100 mt-2" style="background-color: rgb(167, 147, 147); color: #fff" href="/products">Voltar</a>
    </form>
</div>
@endsection
