<!-- resources/views/produto.create.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Produto - Create</p>
@endsection

@section('content')
      <p>Formulário</p>

      {!! Form::open(['url' => 'produto/create']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome') }} <br><br>

      {{  Form::label('quantidade', 'Quantidade:') }} <br>
      {{  Form::text('quantidade') }} <br><br>

      {{  Form::label('valor', 'Valor:') }} <br>
      {{  Form::text('valor') }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection