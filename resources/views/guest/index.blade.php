@extends('layouts.app')

@section('content')

<div class="container my-3">
    <h1>Movies</h1>
    <div class="row g-4">
        <div class="col">
            <div class="container">
                @foreach ($movies as $movie)
                    <div class="card">
                        <span>Titolo: <strong>{{$movie->title}}</strong></span>
                        <span>Titolo originale: <strong>{{$movie->original_title}}</strong></span>
                        <span>Nazionalita: <strong>{{$movie->nationality}}</strong></span>
                        <span>Data: <strong>{{$movie->date}}</strong></span>
                        <span>Voto: <strong>{{$movie->vote}}</strong></span>
                    </div>  
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection