@extends('adminlte::page')

@section('title', 'Recarga de Fundos')

@section('content_header')
    <h1>Realizar Recarga </h1>

    <ol    class = "breadcrumb">
        <li><a href  = "">Dashboard</a></li>
        <li><a href  = "">Saldo</a></li>
        <li><a href  = "">Depositar</a></li>
    </ol>
@stop

@section('content')
<div class = "box-header">
       <h3>Realizar Recarga</h3>
    <div class = "box-body">
    <form method="POST" action="{{  route('deposit.store') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <input name="value" type="text" placeholder="Valor Recarga" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Recarregar</button>
            </div>
        </form>
    </div>
@stop