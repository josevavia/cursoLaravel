@extends('layouts.base')

@section('contenido')

    <h1>Listado de usuarios</h1>

    <ul>
    @foreach($users as $key => $user)
        <li>{{$key}}, {{$user->name}}</li>
    @endforeach
    </ul>

    {!! $users->render() !!}

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