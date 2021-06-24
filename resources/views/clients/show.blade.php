
 @extends('site.app')

  @section('titulo', 'Detalhe do cliente')

  @section('conteudo')     
        <div class="card">
            <h3>Detalhe do cliente {{ $client->nome }} </h3>
            <div class="card-body">
                <p><strong>ID: </strong> {{ $client->id }}</p>
                <p><strong>Nome: </strong> {{ $client->nome }}</p>
                <p><strong>Endereço: </strong> {{ $client->endereco }}</p>
                <p><strong>Observação: </strong> {{ $client->observacao }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('clients.index') }}">  Voltar  </a>
            </div>
        </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

  @endsection 