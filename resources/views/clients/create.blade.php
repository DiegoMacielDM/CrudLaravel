@extends('site.app')

@section('titulo', 'Novo cliente')

@section('conteudo')
        <h1>Novo cliente</h1>
        <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome"  placeholder="Digite seu nome" required>
        </div>
        <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu Endereço" required
        </div>
        <div class="mb-3">
        <label for="observacao" class="form-label">Digite a observação</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="3" required></textarea>
        </div>
       

        <button type="submit" class="btn btn-success"> Cadastrar </button>
        </form>
        
@endsection