@extends('layouts.app')
@section('title', 'Movies')

@section('content')
    <div class="container mt-5">
        <div class="row g-3 ">
            @foreach ($movies as $movie)
                <div class="col-12 col-mg-4 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ $movie->image }}" alt="{{ $movie->title }}">
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Info</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
