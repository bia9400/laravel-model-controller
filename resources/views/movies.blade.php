<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies_List</title>
</head>
<body>
    <h1>Lista titoli film </h1>
    <ul>
        @foreach ($myMovies as $movie)
            <li>{{$movie->title}}</li>
        @endforeach
    </ul>
</body>
</html>