@extends('layout.layout')

@section('content')
    <div class="container mt-3">
        <div class="row">
            @foreach ($books as $book) 
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="#" class="card-img-top" alt="Book Image"> 
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->author }}</p>
                            <p class="card-text">{{ $book->publication_add }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
