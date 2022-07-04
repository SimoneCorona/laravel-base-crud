@extends('layout.app')

@section('main_content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->series }}</p>
        <img src="{{ $comic->thumb }}" alt="">
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->description }}</p>
        <div>
            <a href="{{ route('comic.edit', ['comic' => $comic->id]) }}">Modifica</a>

            <form action="{{ route('comic.destroy', [ 'comic' => $comic->id ]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Cancella</button>
            </form>
        </div>

    </div>
@endsection