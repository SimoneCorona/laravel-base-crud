<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="{{ route('homepage') }}">Homepage</a>
            </li>
            <li>
                <a href="{{ route('comic.index') }}">Lista dei fumetti</a>
            </li>
            <li>
                <a href="{{ route('comic.create') }}">Inserisci un nuovo fumetto</a>
            </li>
        </ul>
    </nav>
    <main>
        @yield('main_content')
    </main>

</body>
</html>