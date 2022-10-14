@extends('layout.app')
@section('title','Livro - {{$livro->titulo}}')
@section('content')
<br>
    <h1>Livro - {{$livro->titulo}}</h1>
    <ul>
        <li>ID: {{$livro->id}}</li>
        <li>Descrição: {{$livro->descricao}}</li>
        <li>Autor: {{$livro->autor}}</li>
        <li>Editora: {{$livro->editora}}</li>
        <li>Ano: {{$livro->ano}}</li>
    </ul>    
    {{Form::open(['route' => ['livros.destroy',$livro->id],'method' => 'DELETE'])}}
    <a href="{{url('livros/'.$livro->id.'/edit')}}" class="btn btn-warning">Alterar</a>
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    <a href="{{url('livros/')}}" class="btn btn-success">Voltar</a>
    {{Form::close()}}
        @endsection