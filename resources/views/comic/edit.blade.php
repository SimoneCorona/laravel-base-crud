@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1> Modifica info Fumetto </h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comic.update', ['comic' => $comic_update->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title"
                    value="{{ old('title') ? old('title') : $comic_update->title }}">
            </div>

            <div>
                <label for="type">Description</label>
                <input type="text" name="description" id="description"
                    value="{{ old('description') ? old('description') : $comic_update->description }}">
            </div>

            <div>
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb"
                    value="{{ old('thumb') ? old('thumb') : $comic_update->thumb }}">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="text" name="price" id="price"
                    value="{{ old('price') ? old('price') : $comic_update->price }}">
            </div>

            <div>
                <label for="series">Serie</label>
                <input type="text" name="series" id="series"
                    value="{{ old('series') ? old('series') : $comic_update->series }}">
            </div>

            <div>
                <label for="sale_date">Sale on date</label>
                <input type="text" name="sale_date" id="sale_date"
                    value="{{ old('sale_date') ? old('sale_date') : $comic_update->sale_date }}">
            </div>

            <div>
                <label for="type">Book type</label>
                <input type="text" name="type" id="type"
                    value="{{ old('type') ? old('type') : $comic_update->type }}">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection