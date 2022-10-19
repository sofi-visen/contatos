@extends('layout.app')
@section('title','emprestimo de Livros')
@section('content')
<br>
    <h1>Empréstimos</h1>
   @if(Session::has('mensagem'))
        <div class="alert alert-info">
            {{Session::get('mensagem')}}
        </div>
    @endif 
    <br>
    {{Form::open(['url'=>'emprestimos/buscar', 'method'=>'GET'])}}
    <div class="row">
        <div class="col-sm-3">
            <div class="input-group">
                @if($busca !== null)
                &nbsp;<a class="btn btn-info" href="{{url
                    ('emprestimos/')}}">Todos</a>&nbsp;
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
    @foreach ($emprestimos as $emprestimo)
    <tr>
       <td><a href="{{url('emprestimo/'.$emprestimo->id)}}">
            {{$emprestimo->id}}</a>
    </td>
    <td>
            {{$emprestimo->contato_id}}</a>
    </td>
    <td>
            {{$emprestimo->livro_id}}</a>
    </td>
    <td>
            {{$emprestimo->datahora}}</a>
    </td>    
    </tr>
    @endforeach
</table> 
<h5>Novo Empréstimo</h5>
<a class="btn btn-primary" href="{{url('emprestimos/create')}}">Criar</a> 
        {{$emprestimos->links()}}
        @endsection