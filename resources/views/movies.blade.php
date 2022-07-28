<!DOCTYPE html>
<html lang="en">

<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css' integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==' crossorigin='anonymous'/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies_List</title>
</head>

<body>
    <h1>Card Films </h1>
   

    <div class="row">
        @foreach ($myMovies as $movie)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title: {{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Original_title:{{ $movie->original_title }}</h6>
                        <span>Nation: {{ $movie->nationality }}</span>
                        <span>Date: {{ $movie->date }}</span>
                        <span>Vote: {{ $movie->vote }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
