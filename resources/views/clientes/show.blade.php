@extends('layouts.base')
@section('content')

<h1> Cliente:{{ $cliente->nome }} </h1>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-2">Ações</th>
                <th>ID</th>
                <th>Nome</th>
                <th class="col-2">celular</th>
                <th>Email</th>
                <th>Observações</th>
        </tr>
    </thead>
    <tbody>

         <tr>
            <td>
                <a class="btn btn-primary" href="{{ route('clientes.edit', ['id'=>$cliente->id_cliente]) }}">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>

            </td>
            <td>
                {{ $cliente->id_cliente}}
            </td>
            <td>
                {{ $cliente->nome }}
            </td>
            <td>
                {{ $cliente->celular }}
            </td>
            <td>
                {{ $cliente->email }}
            </td>
            <td>
                {{ $cliente->observacoes }}
            </td>
        </tr>


        
    </tbody>
</table>

@endsection
@section('scripts')

@endsection
