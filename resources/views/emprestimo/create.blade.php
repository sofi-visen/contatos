@extends('layout.app')
@section('title','Realizar empréstimo')
@section('content')
<br>
    <h1>Realizar empréstimo</h1>
<br>
    {{Form::open(['route' => 'emprestimos.store', 'method' => 'POST',
        'enctype'=>'multipart/form-data'])}}
        {{Form::label('contato_id', 'Contato')}}
        {{Form::text('contato_id', '', ['class'=>'form-control', 'required', 
        'placeholder' =>'contato'])}}    
        {{Form::label('livro_id', 'Livro')}}
        {{Form::text('livro_id', '', ['class'=>'form-control', 'required', 
        'placeholder' =>'livro'])}}       
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