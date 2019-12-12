<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acampamento;
use App\Http\Requests\AcampamentoRequest;

class AcampamentoController extends Controller
{
    public function index()
    {
        $acampamentos = Acampamento::all()->sortBy('nome');
    }

    public function show($id)
    {
        $acampamento = Acampamento::findOrFail($id);

    }

    public function create()
    {
        return view('acampamentos.create');
    }

    public function store(AcampamentoRequest $request)
    {
        $valido = $request->validated();
        Acampamento::create($request->all());

    }

    public function edit($id)
    {
        return view('acampamentos.edit');
    }

    public function update(Request $request, $id)
    {
        $acampamento = Acampamento::findOrFail($id);

    }

    public function destroy($id)
    {
        $acampamento = Acampamento::findOrFail($id);
        $acampamento->delete();
    }
}
