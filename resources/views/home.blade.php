<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <ul class="list-unstyled row row-cols-5 gap-1">
        @foreach ($movies as $movie)
        <li class="col card">
            <img src="{{ $movie -> image }}" alt="">
            <div class="card-body">
                <h5 class="card-title"> {{$movie -> title}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"> {{$movie -> original_title}}</h6>
                <p class="card-text">
                    {{$movie -> nationality}}
                    <br>
                    {{$movie -> date}}
                    <br>
                    {{$movie -> vote}}
                </p>
            </div>
        </li>
        @endforeach
    </ul>
</body>

</html>