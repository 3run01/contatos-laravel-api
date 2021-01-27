@component('mail::message')
# Olá,

<p>Você receber um novo contato, segue abaixo mais informações:</p>

<p>
<b>Nome: </b> {{$contato->nome}} <br/>
<b>Telefone: </b> {{$contato->telefone}} <br/>
<b>E-mail: </b> {{$contato->email}} <br/>
<b>Mensagem: </b> {{$contato->mensagem}} <br/>
<b>IP: </b> {{$contato->ip}} <br/>
</p>

@component('mail::button', ['url' => $contato->arquivo])
Visualizar Arquivo
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
