<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Comics</h1>
        
        <ul>
            <li>
                <a href="{{ route('home') }}">Homepage</a>
            </li>
            <li>
                <a href="{{ route('comics.index') }}">Catalogo dei fumetti</a>
            </li>
            <li>
                <a href="{{ route('comics.create') }}">Scrivi i dati del tuo fumetto preferito</a>
            </li>
        </ul>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>