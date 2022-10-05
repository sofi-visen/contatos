@extends('layout.app')
@section('title','Contato - {{$contato->nome}}')
@section('content')
    <h1>Contato - {{$contato->nome}}</h1>
    <ul>
        <li>id: {{contato->nome}}</li>
        <li>e-mail: {{contato->emai}}</li>
        <li>telefone: {{contato->telefone}}</li>
        <li>cidade: {{contato->cidade}}</li>
        <li>estado: {{contato->estado}}</li>
    </ul>    
        @endsection