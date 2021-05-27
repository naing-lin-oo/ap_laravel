@extends('layout')

@section('content')
    <div class="container">
        
        <br>
        <div class="card">
        <div class="card-header" style="text-align: center;">
            Content
        </div>
            <div class="card-body">
                <div>
                    <h5 class="card-title">{{ $post->name }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <hr>
                </div>
                <div>
                    <a href="/posts" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection