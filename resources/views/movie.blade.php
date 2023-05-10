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

    
            <h1 class="text-center">Movies</h1>
   
    <div class="container">
        @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><b>Title:</b> {{$movie->title}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><b>Original title:</b> {{$movie->original_title}}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary"><b>Nationality:</b> {{$movie->nationality}}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary"><b>Date:</b> {{$movie->date}}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary"><b>Vote:</b> {{$movie->vote}}</h6>
            </div>
            </div>
        @endforeach

    </div>
    

</body>

</html>