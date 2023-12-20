@extends('layouts.app')
@section('title' . 'Movies')

@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
@endsection
