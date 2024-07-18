@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
<h1>Movie List</h1>

<section class="movies row">
    @foreach ($movies as $movie)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    @endforeach
</section>



@endsection
