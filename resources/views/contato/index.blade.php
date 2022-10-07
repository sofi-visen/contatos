@extends('layout.app')
@section('title','Listagem de Contatos')
@section('content')
<br>
    <h1>Listagem de Contatos</h1>
    <br>
  <table class="table table-striped">
    @foreach ($contatos as $contato)
    <tr>
       <td><a href="{{url('contatos/'.$contato->id)}}">
            {{$contato->nome}}</a>
    </td>
        @endforeach
    </tr>
</table> 
<h5>novo contato</h5>
<a class="btn btn-primary" href="{{url('contatos/create')}}">Criar</a> 
        @endsection