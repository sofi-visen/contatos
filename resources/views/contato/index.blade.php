@extends('layout.app')
@section('title','Listagem de Contatos')
@section('content')
<br>
    <h1>Listagem de Contatos</h1>
   @if(Session::has('mensagem'))
        <div class="alert alert-info">
            {{Session::get('mensagem')}}
        </div>
    @endif 
    <br>
    {{Form::open(['url'=>'contatos/buscar', 'method'=>'GET'])}}
    <div class="row">
        <div class="col-sm-3">
            <div class="input-group">
                @if($busca !== null)
                &nbsp;<a class="btn btn-info" href="{{url
                    ('contatos/')}}">Todos</a>&nbsp;
                    @endif
            {{Form::text('busca', $busca, ['class'=>'form-control',
                'required', 'placeholder'=>'buscar'])}}
                &nbsp;
                <span class="input-group-btn">
                {{Form::submit('Buscar', ['class'=>'btn btn-warning'])}}
            </span>
            </div>
            </div>
            </div>
            {{Form::close()}}
            <br><br>
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
      {{$contatos->links()}}  
        @endsection