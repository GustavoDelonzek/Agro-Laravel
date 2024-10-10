@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Editar Produto</h1>
            <form action="{{ route('products.update', $product->id) }}" method="post">
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
                <!-- Adicione mais campos conforme necessário -->
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </form>
        </div>
    </div>
</div>
@endsection
