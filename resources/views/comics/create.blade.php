@extends('layouts.app')

@section('content')
    <h3>Scrivi i dati del tuo fumetto preferito</h3>

    <form action="{{ route('comics.store') }}" method="post">

        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title">
        </div>
        <br>

        <div>
            <label for="thumb">Url immagine</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        <br>

        <div>
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description">
        </div>
        <br>

        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series">
        </div>
        <br>

        <div>
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type">
        </div>
        <br>

        <div>
            <label for="sale_date">Sale date</label>
            <input type="text" id="sale_date" name="sale_date">
        </div>
        <br>

        <div>
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price">
        </div>
        <br>

        <input type="submit" value="Salva">
    </form>
@endsection