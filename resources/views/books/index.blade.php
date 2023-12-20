{{-- INDEX BOOKS --}}
@extends('layouts.app')
@section('title', 'Books')

@section('content')
    <ul>
        @foreach ($books as $book)
            <li><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></li>
        @endforeach
    </ul>
@endsection
