@component('mail::message')
{{  $tarefa  }}

Data Limite para Conclusão {{  $data_limite_conclusao  }}

@component('mail::button', ['url' => $url])
Ver Tarefa
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
