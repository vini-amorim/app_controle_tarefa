@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Cadastrando uma Nova Tarefa</div>

        <div class="card-body">
          <form method="post" action="{{  route('tarefa.store')  }}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nova Tarefa</label>
              <input type="text" class="form-control" name="tarefa">
              <div class="mb-3">
                <br>
                <label class="form-label">Data limite para Conclusão</label>
                <input type="date" class="form-control" name="data_limite_conclusao">
              </div>
              <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection