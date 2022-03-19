@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ $tarefa->tarefa }}</div>
        
        <div class="card-body">
          <a class="btn btn-success" href="{{route('tarefa.index')}}">Tarefas Cadastradas</a>
          <br>
          <br>
          
          <fieldset disabled>
            <label class="form-label">Data limite para Conclusão</label>
            <input type="date" class="form-control" value="{{  $tarefa->data_limite_conclusao }}">
          </fieldset>
          <br>
          <a href="{{ url()->previous() }}" class="btn btn-primary">Volter</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection