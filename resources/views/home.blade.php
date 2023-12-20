@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="container d-flex justify-content-between my-5">
        <a href="/movies">
            <div class="square d-flex justify-content-center align-items-center bg-warning p-5 rounded-circle ">
                <h3 class="fs-1 text-black">Movies</h3>
            </div>
        </a>
        <a href="/books">
            <div class="square d-flex justify-content-center align-items-center bg-danger p-5 rounded-circle ">
                <h3 class="fs-1 text-white">Books</h3>
            </div>
        </a>
    </main>
@endsection
