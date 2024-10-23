@extends('layout')

@section('conteudo')
    <h2>Cadastrar Categoria</h2>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
@endsection
