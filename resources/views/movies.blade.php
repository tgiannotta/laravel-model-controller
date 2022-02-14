<h1>Elenco Film:</h1>

@foreach ($movies as $movie)
    <div>
        <h2>{{ $movie->title }}</h2>
        <h5>{{ $movie->vote }}</h5>
    </div>
@endforeach