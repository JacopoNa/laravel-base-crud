@extends('layouts.app')

@section('content')
<div>
    <h3>{{ $comic->title }}</h3>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <h4>{{ $comic->description }}</h4>
    <div>{{ $comic->series }}</div>
    <div>{{ $comic->type }}</div>
    <div>{{ $comic->price }} €</div>
    <div>{{ $comic->sale_date }}</div>
</div>
@endsection