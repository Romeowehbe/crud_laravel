<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class MotoristaController extends Controller
{
    //Criar motorista

    public function create()
    {
        return view('motorista.create');
    }

    public function store(Request $request)
    {
        Motorista::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'cnh' => $request->cnh,
        ]);

        return Redirect::route('motorista.show');
    }

    // Listar motorista

    public function show()
    {
        $motorista = Motorista::all();
        return view('motorista.show', ['motorista' => $motorista]);
    }

    // Atualizar motorista

    public function edit($id)
    {
        $motorista = Motorista::findOrFail($id);
        return view('motorista.edit', ['motorista' => $motorista]);
    }

    public function update(Request $request, $id)
    {
        $motorista = Motorista::findOrFail($id);

        $motorista->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'cnh' => $request->cnh,
        ]);

        return Redirect::route('motorista.show');
    }

    // Apagar motorista

    public function delete($id)
    {
        $motorista = Motorista::findOrFail($id);
        return view('motorista.delete',  ['motorista' => $motorista]);
    }

    public function destroy($id)
    {
        $motorista = Motorista::findOrFail($id);
        $motorista->delete();

        return Redirect::route('motorista.show');
    }
}
