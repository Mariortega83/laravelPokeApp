<?php
namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index() {
        return view('pokemon.index', [
            'lipokemon' => 'active',
            'pokemons' => Pokemon::orderBy('nombre')->get(),
        ]);
    }

    public function create() {
        return view('pokemon.create', ['lipokemon' => 'active']);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nombre' => 'required|unique:pokemon|max:100|min:2',
            'tipo' => 'required|max:50|min:2',
            'ataque' => 'required|integer|gte:0|lte:999',
            'defensa' => 'required|integer|gte:0|lte:999',
        ]);

        $pokemon = new Pokemon($request->all());
        try {
            $pokemon->save();
            return redirect('pokemon')->with(['message' => 'El Pokémon ha sido creado.']);
        } catch(\Exception $e) {
            return back()->withErrors(['error' => 'Error al crear el Pokémon.']);
        }
    }

    public function show($id) {
        return view('pokemon.show', [
            'lipokemon' => 'active',
            'pokemon' => Pokemon::find($id),
        ]);
    }

    public function edit($id) {
        return view('pokemon.edit', [
            'lipokemon' => 'active',
            'pokemon' => Pokemon::find($id),
        ]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nombre' => 'required|max:100|min:2',
            'tipo' => 'required|max:50|min:2',
            'ataque' => 'required|integer|gte:0|lte:999',
            'defensa' => 'required|integer|gte:0|lte:999',
        ]);

        $pokemon = Pokemon::find($id);
        $pokemon->fill($request->all());
        try {
            $pokemon->save();
            return redirect('pokemon')->with(['message' => 'El Pokémon ha sido actualizado.']);
        } catch(\Exception $e) {
            return back()->withErrors(['error' => 'Error al actualizar el Pokémon.']);
        }
    }

    public function destroy($id)
    {
        $pokemon = Pokemon::find($id);
        if ($pokemon) {
            $pokemon->delete();
            return redirect('pokemon')->with(['message' => 'El Pokémon ha sido eliminado.']);
        } else {
            return redirect('pokemon')->withErrors(['error' => 'El Pokémon no existe.']);
        }
    }
}