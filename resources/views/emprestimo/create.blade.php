@extends('layouts.app')
@section('title','Realizar empréstimo')
@section('content')
<br>
    <h1>Realizar empréstimo</h1>
<br>
    {{Form::open(['route' => 'emprestimos.store', 'method' => 'POST',
        'enctype'=>'multipart/form-data'])}}
        {{Form::label('contato_id', 'Contato')}}
        {{Form::text('contato_id', '', ['class'=>'form-control', 'required', 
        'placeholder' =>'selecione um contato',
         'list'=>'listcontatos'])}} 
         <datalist id='listcontatos'>
            @foreach($contatos as $contato)  
            <option value="{{$contato->id}}">{{$contato->nome}}</option>
            @endforeach
        </datalist>

        {{Form::label('livro_id', 'Livro')}}
        {{Form::text('livro_id', '', ['class'=>'form-control', 'required', 
        'placeholder' =>'selecione um livro', 'list'=>'listlivros'])}}
        <datalist id="listlivros">
            @foreach($livros as $livro)
            <option value="{{$livro->id}}">{{$livro->titulo}}</option>
            @endforeach
        </datalist>   

        {{Form::label('datahora', 'Data')}}
        {{Form::text('datahora', \Carbon\Carbon::now()
        ->format('d/m/Y H:i:s'),
        ['class'=>'form-control', 'required', 
        'placeholder' =>'data', 'rows'=>'8'])}}
        {{Form::label('obs', 'Obs')}}
        {{Form::text('obs', '', ['class'=>'form-control',
        'placeholder' =>'observação'])}}
        <br>
        {{Form::submit('Salvar', ['class'=>'btn btn-success'])}}
        {!!Form::button('Cancelar', ['onclick'=>'javascript:history.go(-1)',
            'class'=> 'btn btn-danger'])!!}
        {{Form::close()}}
        @endsection