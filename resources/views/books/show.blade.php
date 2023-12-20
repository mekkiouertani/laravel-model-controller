{{-- SHOW BOOKS --}}
@extends('layouts.app')
@section('title', '$book->title')

@section('content')
    <div class="container d-flex justify-content-between mt-5">
        <div>
            <h1>{{ $book->title }}</h1>
            <h6 class="mt-5">Descrizione:</h6>
            <p class=" w-75 text-white">{{ $book->plot }}</p>
        </div>
        <img src="{{ $book->cover_image }}" alt="{{ $book->title }}" style="width: 18rem">
    </div>
@endsection
