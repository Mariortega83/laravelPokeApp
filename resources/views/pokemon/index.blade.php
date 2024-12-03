@extends('product.base')

@section('title', 'Lista de Pokémon')
@section('content')
    <table class="table table-striped table-hover" id="tablaPokemon">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>tipo</th>
                <th>ataque</th>
                <th>defensa</th>
                @if(session('user'))
                    <th>delete</th>
                    <th>edit</th>
                @endif
                <th>view</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pokemons as $pokemon)
                <tr>
                    <td>{{$pokemon->id}}</td>
                    <td>{{$pokemon->nombre}}</td>
                    <td>{{$pokemon->tipo}}</td>
                    <td>{{$pokemon->ataque}}</td>
                    <td>{{$pokemon->defensa}}</td>
                    @if(session('user'))
                        <td><a href="#" data-href="{{url('pokemon/' . $pokemon->id)}}" class="borrar">delete</a></td>
                        <td><a href="{{url('pokemon/' . $pokemon->id . '/edit')}}">edit</a></td>
                    @endif
                    <td><a href="{{url('pokemon/' . $pokemon->id)}}">view</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        @if(session('user'))
            <a href="{{url('pokemon/create')}}" class="btn btn-success">add pokemon</a>
            <form id="formDelete" action="" method="post">
                @csrf
                @method('delete')
            </form>
        @endif
    </div>
    
@endsection

@section('scripts')
    <script src="{{url('assets/scripts/script.js')}}"></script>
@endsection