@extends('layout.app')

@section('main_content')
    <div class="container">
        <h1>Inserisci un nuovo fumetto</h1>
        <form action="{{ route('comic.store') }}" method="post">
            @csrf

            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div>
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title">
            </div>
            <div>
                <label for="series">Serie</label>
                <input type="text" id="series" name="series">
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input type="text" id="thumb" name="thumb">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price">
            </div>
            <div>
                <label for="sale_date">Data</label>
                <input type="text" id="sale_date" name="sale_date">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea type="text" id="description" name="description"></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection