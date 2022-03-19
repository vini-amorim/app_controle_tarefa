@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Editar Tarefa</div>

        <div class="card-body">
          <form method="post" action="{{  route('tarefa.update', ['tarefa' => $tarefa->id])  }}">
            @csrf
            @method ('PUT')
            <div class="mb-3">
              <label class="form-label">Nova Tarefa</label>
              <input type="text" class="form-control" name="tarefa" value="{{ $tarefa->tarefa}}"
              <div class="mb-3"><br>
                <label class="form-label">Data limite para Conclusão</label>
                <input type="date" class="form-control" name="data_limite_conclusao" value="{{$tarefa->data_limite_conclusao}}">
              </div>
              <button type="submit" class="btn btn-primary">Atualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection