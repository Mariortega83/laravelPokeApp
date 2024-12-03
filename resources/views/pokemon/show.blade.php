@extends('product.base')

@section('title', 'Ver Pokémon')

@section('basecontent')
    <div class="form-group">
        Pokémon ID:
        {{$pokemon->id}}
    </div>
    <div class="form-group">
        Nombre:
        {{$pokemon->nombre}}
    </div>
    <div class="form-group">
        Tipo:
        {{$pokemon->tipo}}
    </div>
    <div class="form-group">
        Ataque:
        {{$pokemon->ataque}}
    </div>
    <div class="form-group">
        Defensa:
        {{$pokemon->defensa}}
    </div>
    <div class="form-group">
        <a href="{{url()->previous()}}">Volver</a>
    </div>
@endsection