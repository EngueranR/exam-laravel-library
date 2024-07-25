@extends('layouts.app')

@section('content')
    <h1 class="my-4">Library</h1>
    <a href="{{ route('books.create') }}" class="btn btn-success mb-4">Add New Book</a>
    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $book->title }}</strong> Created by {{ $book->author }} ({{ $book->year }})
                </div>
                <div>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
