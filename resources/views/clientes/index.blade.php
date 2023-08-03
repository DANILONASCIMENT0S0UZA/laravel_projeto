@extends('layouts.base')
@section('content')

<h1>
    <i class="bi bi-person-fill"></i>
    Clientes -
    <a href="{{route('clientes.create')}}" class="btn btn-primary">
        Novo Cliente
    </a>

</h1>
<p>{{ $clientes->onEachSide(5)->links() }}</p>

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
            @foreach($clientes as $cliente)
            <tr>
                <td>
                    <a class="btn btn-primary" href="{{ route('clientes.edit', ['id'=>$cliente->id_cliente]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a class="btn btn-success" href="{{ route('clientes.show', ['id'=>$cliente->id_cliente]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <form method="POST" action="{{route('clientes.destroy', ['id'=>$cliente->id_cliente])}}">
                        @csrf
                        @method('delete')
                    <button class="btn btn-danger" ><i class="fa-solid fa-trash-can"></i></button>
                </form>
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
            @endforeach
        </tbody>
    </table>

@endsection
@section('scripts')

@endsection
