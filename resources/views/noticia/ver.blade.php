@extends('layouts.base')

@section('contenido')

    {{-- Un comentario --}}

    <!-- Comentario HTML -->

    {{ $data['nombre'] }} y el email: {{ $data['email'] }}

    @if ($data['edad'] < 30)
    y la edad {{ $data['edad'] }}
    @endif

    @lang('miidioma.prueba')

    {{ trans('miidioma.prueba2') }}
    <?php echo 'FuncionaPHP' ?>

@stop


@section('empresas')
    @for ($i = 1; $i < 10; $i++)
        Empresa {{ $i }}
    @endfor

@stop

@section('menu')

    MENU EXTENDIDO

    @parent

@stop