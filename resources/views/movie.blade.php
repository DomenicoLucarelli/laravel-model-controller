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

   

        @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Title: {{$movie->title}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{$movie->original_title}}</h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Nationality: {{$movie->nationality}}</h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Date: {{$movie->date}}</h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Vote: {{$movie->vote}}</h6>
            </div>
          </div>
        @endforeach
    

</body>

</html>