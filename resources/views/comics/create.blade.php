@extends('layouts.app')

@section('content')
    <h3>Scrivi i dati del tuo fumetto preferito</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="post">

        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <br>

        <div>
            <label for="thumb">Url immagine</label>
            <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}">
        </div>
        <br>

        <div>
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}">
        </div>
        <br>

        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" value="{{ old('series') }}">
        </div>
        <br>

        <div>
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type" value="{{ old('type') }}">
        </div>
        <br>

        <div>
            <label for="sale_date">Sale date</label>
            <input type="text" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
        </div>
        <br>

        <div>
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}">
        </div>
        <br>

        <input type="submit" value="Salva">
    </form>
@endsection