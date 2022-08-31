@extends('layouts.app')

@section('content')
    <h2>Catalogo dei fumetti</h2>

    <div>
        @foreach ($comics as $comic)
            <div>
                <h3>{{ $comic->title }}</h3>
                <h4>{{ $comic->description }}</h4>
                <a href="{{ route('comics.show', $comic->id) }}">Vedi dettagli</a>
                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica prodotto</a>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                    @method('DELETE')
                    @csrf

                    <input type="submit" value="Cancella">
                </form>
            </div>
            <br>
        @endforeach
    </div>
@endsection