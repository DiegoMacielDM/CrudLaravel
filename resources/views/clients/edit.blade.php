
 @extends('site.app')

  @section('titulo', 'Editar cliente')

  @section('conteudo')   
        <h1>Editar cliente {{ $client->nome }}</h1>
        <form action="{{ route('clients.update', $client) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="nome" class="form-label" required>Nome</label>
            <input type="text" class="form-control" value="{{ $client->nome }}" id="nome" name="nome"  placeholder="Digite seu nome">
            </div>
            <div class="mb-3">
            <label for="endereco" class="form-label" required>Endereço</label>
            <input type="text" class="form-control" value="{{ $client->endereco }}" id="endereco" name="endereco" placeholder="Digite seu Endereço">
            </div>
            <div class="mb-3">
            <label for="observacao" class="form-label" required>Digite a observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3">{{ $client->observacao }}
            </textarea>
            </div>
            <button type="submit" class="btn btn-success"> Atualizar </button>
        </form>





  @endsection 