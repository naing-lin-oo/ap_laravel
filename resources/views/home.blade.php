@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header" style="text-align: center;">
            Content
        </div>
            @foreach($data as $post)
                <div class="card-body">
                    <div>
                        <h5 class="card-title">{{ $post->name }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="#" class="btn btn-primary">View</a>
                        <hr>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection