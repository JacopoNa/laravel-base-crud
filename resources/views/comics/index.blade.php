@extends('layouts.app')

@section('content')
    <h2>Catalogo dei fumetti</h2>

    <div>
        @foreach ($comics as $comic)
            <div>
                <h3>{{ $comic->title }}</h3>
                <h4>{{ $comic->description }}</h4>
                <a href="{{ route('comics.show', $comic->id) }}">Vedi dettagli</a>
            </div>
            <br>
        @endforeach
    </div>
@endsection