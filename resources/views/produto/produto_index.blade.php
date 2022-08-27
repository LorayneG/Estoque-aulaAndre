<!-- resources/views/produto.index.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p> Produto - Index </p>
    @endsection

    <table>
     <tr>
        <th>nome</th>
        <th>quantidade</th>
        <th>valor</th>
     </tr>

     <tr>
        <th>nome</th>
        <th>quantidade</th>
        <th>valor</th>
     </tr>


 
@section('content')
    <p> Conteúdo </p>
    @foreach ($produtos as $value)
    <p> O produto se chama  {{ $value->nome }}!</p>
    @endforeach
@endsection