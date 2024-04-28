<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>WEBG4</title>
</head>
<body class="grid-container">
    <header >
        <h2>Gestion d'inventaire - Accueil</h2>
    </header>
    <aside>
        <ul>
            <li>

                <a href="/">Accueil</a>
            </li>
            <li>

                <a href="/emplacements">Emplacements</a>
            </li>
            <li>

                <a href="/ajouter">Ajouter un objet</a>
            </li>
    
        </ul>
    </aside>
    <main>
        @yield('content')
    </main>
    <footer>
        <h4>WEBG4 | 59939 | Youssef Rajoul | NVS</h4>
    </footer>
</body>
</html>
