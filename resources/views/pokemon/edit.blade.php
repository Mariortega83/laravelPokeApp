@extends('product.base')

@section('title', 'Editar Pokémon')

@section('basecontent')
    <form action="{{ url('pokemon/' . $pokemon->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input value="{{ old('nombre', $pokemon->nombre) }}" required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input value="{{ old('tipo', $pokemon->tipo) }}" required type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo">
        </div>
        <div class="form-group">
            <label for="ataque">Ataque</label>
            <input value="{{ old('ataque', $pokemon->ataque) }}" required type="number" class="form-control" id="ataque" name="ataque" placeholder="Ataque">
        </div>
        <div class="form-group">
            <label for="defensa">Defensa</label>
            <input value="{{ old('defensa', $pokemon->defensa) }}" required type="number" class="form-control" id="defensa" name="defensa" placeholder="Defensa">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection