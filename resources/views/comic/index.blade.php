@extends('layout.app')

@section('main_content')
    <h1>Lista fumetti:</h1>
    <ul>
        @foreach ($comic_list as $comic)
            <li>
                <h3>
                    <a href="{{ route('comic.show', ['comic' => $comic->id]) }}">
                        {{ $comic->title }}
                    </a>
                </h3>
                <p>{{ $comic->series }}</p>
            </li>
        @endforeach
    </ul>
@endsection