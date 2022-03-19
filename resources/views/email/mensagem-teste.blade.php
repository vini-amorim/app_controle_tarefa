@component('mail::message')
# Introdução

Teste
Email enviado automaticamente quando é acessado uma rota especifica.

@component('mail::button', ['url' => ''])
Texto do Botão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
