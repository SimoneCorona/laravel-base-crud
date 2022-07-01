@extends('layout.app')

@section('main_content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->series }}</p>
        <img src="{{ $comic->thumb }}" alt="">
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->description }}</p>
    </div>
@endsection