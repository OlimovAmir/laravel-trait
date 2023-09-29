<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    <title>Trait</title>
</head>

<body>
    <header>
        <ul class="nav navbar-expand navbar-light bg-light">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href='home'>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>

    </header>

    <aside></aside>
    <main> @yield('contentMainHome')

    </main>
    <footer></footer>


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>