{{-- INDEX BOOKS --}}
@extends('layouts.app')
@section('title', 'Books')

@section('content')
    <div class="container mt-5">
        <div class="row g-3 ">
            @foreach ($books as $book)
                <div class="col-12 col-mg-4 col-lg-3">
                    <div class="rec">
                        <a href="{{ route('books.show', $book->id) }}">
                            <img class="rec-img" src="{{ $book->cover_image }}" alt="{{ $book->title }}">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
