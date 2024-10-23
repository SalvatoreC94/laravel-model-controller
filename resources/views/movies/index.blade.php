<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1 class="mb-4">Movie List</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                            <p class="card-text"><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                            <p class="card-text"><strong>Release Date:</strong> {{ $movie->date }}</p>
                            <p class="card-text"><strong>Rating:</strong> {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
