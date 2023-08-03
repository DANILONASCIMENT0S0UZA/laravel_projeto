@extends('layouts.base')

@section('content')
{{-- Menu --}}
    @include('layouts.partials.menu')


    <h1>

        {{

            ($clientes) ? 'Editar Clientes' : 'Cadastrar Clientes'

        }}

    </h1>



    <form action="{{ ($clientes) ? route('clientes.update', ['id_cliente' => $clientes->id_cliente]) : route('clientes.store')}}" method="post" enctype="multipart/form-data">

        @csrf



        <div class="row">

            <div class="col-md-4">

                <label class="form-label" for="nome">

                    Nome*

                </label>



                @if ($clientes)

                    <input class="form-control" type="text" name="nome" id="nome" value="{{$clientes->nome}}" required>

                @else

                    <input class="form-control" type="text" name="nome" id="nome" required>

                @endif

            </div>

            <div class="col-md-4">

                <label class="form-label" for="celular" >

                    Celular

                </label>



                @if ($clientes)

                    <input class="form-control" type="tel" name="celular" id="celular" value="{{$clientes->celular}}" required>

                @else

                    <input class="form-control" type="tel" name="celular" id="celular" required>

                @endif



            </div>



            <div class="col-md-4">

                <label class="form-label" for="email" >

                    Email

                </label>



                @if ($clientes)

                    <input class="form-control" type="email" name="email" id="email" value="{{$clientes->email}}">

                @else

                    <input class="form-control" type="email" name="email" id="email" value="">

                @endif



            </div>



            <div class="col-12 mt-3">

                <label class="form-label" for="observacoes">

                    Observações

                </label>



                @if ($clientes)

                <textarea class="form-control" name="observacoes" id="observacoes">{!! $clientes->observacoes !!}</textarea>

                @else

                <textarea class="form-control" name="observacoes" id="observacoes"></textarea>

                @endif



            </div>



        </div>

        <div class="mt-4"></div>



        @if ($clientes)

            <input class="btn btn-warning" type="submit" value="Atualizar Clientes">

        @else

            <input class="btn btn-success" type="submit" value="Cadastrar Clientes">

        @endif



    </form>

@endsection
@section('scripts')
@endsection
