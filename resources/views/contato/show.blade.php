@extends('layout.app')
@section('title','Contato - {{$contato->nome}}')
@section('content')
    <h1>Contato - {{$contato->nome}}</h1>
    <ul>
        <li>ID: {{$contato->id}}</li>
        <li>e-mail: <a href="mailto:{{$contato->email}}">{{$contato->email}}</a>
        {{$contato->emai}}</li>
        <li>telefone: {{$contato->telefone}}</li>
        <li>cidade: {{$contato->cidade}}</li>
        <li>estado: {{$contato->estado}}</li>
    </ul>    
    {{Form::open(['route' => ['contatos.destroy',$contato->id],'method' => 'DELETE'])}}
    <a href="{{url('contatos/'.$contato->id.'/edit')}}" class="btn btn-warning">Alterar</a>
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    <a href="{{url('contatos/')}}" class="btn btn-success">Voltar</a>
    {{Form::close()}}
        @endsection