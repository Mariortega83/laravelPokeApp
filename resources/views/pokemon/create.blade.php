@extends('product.base')

@section('title', 'Crear Pokémon')

@section('basecontent')
    <form action="{{ url('pokemon') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
        <div class="form-group">
            <label for="ataque">Ataque</label>
            <input type="number" class="form-control" id="ataque" name="ataque" required>
        </div>
        <div class="form-group">
            <label for="defensa">Defensa</label>
            <input type="number" class="form-control" id="defensa" name="defensa" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection