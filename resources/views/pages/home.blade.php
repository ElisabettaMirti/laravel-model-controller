@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
<h1 class="p-4 text-center">Movie List</h1>


<section class="movies container-fluid p-4">
    <div class="row d-flex justify-content-center">
        @foreach ($movies as $movie)
            <div class="card col-2 m-2">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4"><strong>{{ $movie->title }}</strong></h5>
                    <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>
                    <p class="card-text">Paese: {{ $movie->nationality }}</p>
                    <p class="card-text">Data d'uscita: {{ $movie->date }}</p>
                    <p class="card-text">Voto: {{ $movie->vote }}</p>
                </div>
            </div>
        @endforeach
    </div>

</section>



@endsection
