@extends('layouts.base')
@section('content')
    <h1> Cliente: {{ $clientes->nome }}</h1>
    <h2>
        {{ $clientes_enderecos ? 'Editar Endereço' : 'Cadastrar Endereço' }}
    </h2>
    <form
        action="{{ $clientes_enderecos
            ? route('clientes.updateEndereco')
            : route('clientes.storeEndereco', ['id_cliente' => $clientes->id_cliente]) }}"
        method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-3">
                <label class="form-label" for="id_endereco">
                    Endereço*
                </label>
                <textarea class="form-control" name="observacoes" id="observacoes">{{ $produtoTamanho ? $produtoTamanho->observacoes : old('observacoes') }}</textarea>
            </div>

            <div class="col-md-3">
                <label class="form-label" for="observacoes">
                    Numero
                </label>
                <textarea class="form-control" name="observacoes" id="observacoes">{{ $produtoTamanho ? $produtoTamanho->observacoes : old('observacoes') }}</textarea>
            </div>

            <div class="col-md-3">
                <label class="form-label" for="observacoes">
                    complemento
                </label>
                <textarea class="form-control" name="observacoes" id="observacoes">{{ $produtoTamanho ? $produtoTamanho->observacoes : old('observacoes') }}</textarea>
            </div>

            <div class="col-md-3">
                <label class="form-label" for="observacoes">
                    Bairro
                </label>
                <textarea class="form-control" name="observacoes" id="observacoes">{{ $produtoTamanho ? $produtoTamanho->observacoes : old('observacoes') }}</textarea>
            </div>

            <div class="col-md-3">
                <label class="form-label" for="observacoes">
                    Cidade
                </label>
                <textarea class="form-control" name="observacoes" id="observacoes">{{ $produtoTamanho ? $produtoTamanho->observacoes : old('observacoes') }}</textarea>
            </div>

            <div class="col-md-3">
                <label class="form-label" for="observacoes">
                    UF
                </label>
                <textarea class="form-control" name="observacoes" id="observacoes">{{ $produtoTamanho ? $produtoTamanho->observacoes : old('observacoes') }}</textarea>
            </div>

            <div class="col-md-3">
                <label class="form-label" for="observacoes">
                    CEP
                </label>
                <textarea class="form-control" name="observacoes" id="observacoes">{{ $produtoTamanho ? $produtoTamanho->observacoes : old('observacoes') }}</textarea>
            </div>

            <div class="col-12">
                <label class="form-label" for="observacoes">
                    Observações
                </label>
                <textarea class="form-control" name="observacoes" id="observacoes">{{ $produtoTamanho ? $produtoTamanho->observacoes : old('observacoes') }}</textarea>
            </div>

        </div>

        @if ($produtoTamanho)
            <input class="btn btn-primary mt-4" type="submit" value="Atualizar Tamanho Produto">
        @else
            <input class="btn btn-success mt-4" type="submit" value="Cadastrar Tamanho Produto">
        @endif

    </form>
@endsection
@section('scripts')
@endsection
