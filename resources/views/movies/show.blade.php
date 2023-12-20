{{-- SHOW BOOKS --}}
@extends('layouts.app')
@section('title', '$movie->title')

@section('content')
    <div class="container d-flex justify-content-between mt-5">
        <div>
            <h1>{{ $movie->title }}</h1>
            <h2 class="mt-5">Titolo Originale: <span class="bg-white p-2 rounded">{{ $movie->original_title }}</span></h2>
        </div>
        <img src="{{ $movie->image }}" alt="{{ $movie->title }}" style="width: 18rem">
    </div>
@endsection
