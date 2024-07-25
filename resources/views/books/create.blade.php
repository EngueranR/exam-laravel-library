@extends('layouts.app')

@section('content')
    <h1 class="my-4">Add New Book</h1>
    <form action="{{ route('books.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author:</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year:</label>
            <input type="number" id="year" name="year" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre:</label>
            <input type="text" id="genre" name="genre" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
