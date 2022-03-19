@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Confirmação de Email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Um novo email de confirmação foi enviado para o email cadastrado.
                        </div>
                    @endif

                    Antes de acessar, precisamos que confirme seu email.
                    <br>
                    Caso não tenha recebido o email,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui!</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
