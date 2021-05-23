@extends('layout.main')

@section('title', 'Consultar Chamado')

@section('content')

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            @foreach($chamados as $chamado)
            <div class="card-body">
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">{{$chamado->titulo}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                  @if($chamado->categoria == 1)
                    Criação de Usuário
                  @elseif($chamado->categoria == 2)
                    Impressora
                  @elseif($chamado->categoria == 3) 
                    Hardware
                  @elseif($chamado->categoria == 4)
                    Software
                  @elseif($chamado->categoria == 5)
                    Rede    
                  @endif
                  </h6>
                  <p class="card-text">{{$chamado->descricao}}</p>

                </div>
              </div>
              </div>
              @endforeach




              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="/">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection