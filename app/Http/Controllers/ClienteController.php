<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\ClienteEndereco;
use App\Models\Endereco;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::orderBy('nome')->paginate(10);

        return view('clientes.index')
            ->with(compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = null;

        return view('clientes.form')->with(compact('clientes'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = Cliente::create($request->all());
        return redirect()
            ->route(
                'clientes.show',
                ['id' => $clientes->id_cliente]
            )
            ->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.show')
            ->with(compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $clientes = Cliente::find($id);
        return view('clientes.form')
            ->with(compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,int $id)
    {

        $clientes = Cliente::find($id);
        $clientes->update($request->all());
        return redirect()
            ->route('clientes.index')
            ->with('success','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Cliente::find($id)->delete();
        return redirect()
            ->back()
            ->with('danger','Excluído com sucesso!');
    }


public function createEndereco(int $id_cliente)
    {
        $clientes_enderecos = null;
        $clientes = Cliente::find($id_cliente);
        $enderecos = Endereco::class;

        return view('clientes.formEndereco')
            ->with(compact(
                'clientes',
                'endereco',
                'clientes_enderecos'
            ));
    }

    public function storeEndereco(Request $request, int $id_cliente)
    {
        $clientes_enderecos = ClienteEndereco::create([
            'id_cliente' => $id_cliente,
            'id_endereco' => $request->id_endereco,
            'observacoes' => $request->observacoes
        ]);

        return redirect()
            ->route('clientes.show', ['id' => $id_cliente])
            ->with('success', 'Endereco cadastrado com sucesso.');
    }

    public function editEndereco(int $id)
    {
        $clientes_enderecos = ClienteEndereco::find($id);
        $clientes  = $clientes_enderecos->cliente();
        $enderecos = ClienteEndereco::class;

        return view('clientes.formEndereco')
            ->with(compact(
                'clientes',
                'enderecos',
                'clientes_enderecos'
            ));
    }

    public function updateEndereco(Request $request, int $id)
    {
        $clientes_enderecos = ClienteEndereco::find($id);
        $clientes_enderecos->update($request->all());

        return redirect()
            ->route(
                'clientes.show',
                ['id' => $clientes_enderecos->id_cliente]
            )
            ->with('success', 'Atualizado com sucesso');
    }

    public function destroyEndereco(int $id)
    {
        ClienteEndereco::find($id)->delete();
        return redirect()
            ->back()
            ->with('danger', 'Removido com sucesso!');
    }
}
