@extends('layout.app')
@section('title','Contato - {{$contato->nome}}')
@section('content')
    <h1>Contato - {{$contato->nome}}</h1>
    <ul>
        <li>ID: {{$contato->id}}</li>
        <li>e-mail: <a href="mailto:{{$contato->email}}"></a>
        {{$contato->emai}}</li>
        <li>telefone: {{$contato->telefone}}</li>
        <li>cidade: {{$contato->cidade}}</li>
        <li>estado: {{$contato->estado}}</li>
    </ul>    
    <a href="{{url('contatos')}}">Voltar</a>
        @endsection