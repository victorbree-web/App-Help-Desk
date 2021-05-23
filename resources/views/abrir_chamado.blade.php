@extends('layout.main')

@section('title', 'Abrir Chamado')

@section('content')

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="/new_chamado" method="POST">
                  @csrf
                    <div class="form-group">
                      <label>Título</label>
                      <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" id="categoria" class="form-control">
                        <option value="1">Criação Usuário</option>
                        <option value="2">Impressora</option>
                        <option value="3">Hardware</option>
                        <option value="4">Software</option>
                        <option value="5">Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" id="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    @endsection