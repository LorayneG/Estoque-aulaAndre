<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produto;

class ProdutooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os produtos
        //dd ('ENTROU NO INDEX');
        $produtos = Produto::ordeBy('nome', 'ASC')->get();
        dd($produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('STORE');

        $produto = new Produtos;
        $produto->nome           = 'Celular';
        $produto->quantidade     = 15;
        $produto->valor          = 1500;
        $produto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd('ENTROU NO SHOW');
        $produto = Produto::find($id);
        dd($produto);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd('UPDATE')
        $produto = Produto::find(4);
        $produto->nome          = 'Celular Redmi';
        $produto->quantidade    = 3;
        $produto->valor         = 2000;
        $produto->save();

        dd($produto);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto>>find($id);
        $produto->delete();
        //dd('DESTROY');

    }
}
