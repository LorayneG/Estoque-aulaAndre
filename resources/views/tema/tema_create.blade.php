<!-- resources/views/tema.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Tema - Create</p>
@endsection

@section('content')
      <p>Formulário</p>

      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }}</li>
            @endforeach
         </ul>
      </div>
      @endif

      {!! Form::open(['url' => 'tema/create']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome') }} <br><br>

      {{  Form::label('descrição', 'Descrição:') }} <br>
      {{  Form::text('descrição') }} <br><br>

      {{  Form::label('', '') }} <br>
      {{  Form::text('') }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection