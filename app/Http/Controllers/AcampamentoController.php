<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acampamento;

class AcampamentoController extends Controller
{
    public function index()
    {
        $acampamentos = Acampamento::all()->sortBy('nome')->paginate(10);
    }

    public function show($id)
    {
        $acampamento = Acampamento::findOrFail($id);

    }

    public function create()
    {
        return view('acampamentos.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nome' => 'required',
        //     'inicio' => 'required',
        //     'fim' => 'required',
        // ]);
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
