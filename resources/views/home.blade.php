@extends('layout')

@section('content')
    <div class="container">
        <div>
            <a href="/posts/create" class="btn btn-success">New Post</a>
            <a href="/logout" class="btn btn-warning">Logout</a>
        </div>
        <br>
        <div class="card">
        <div class="card-header" style="text-align: center;">
            Content
        </div>
            @foreach($data as $post)
                <div class="card-body">
                    <div>
                        <h5 class="card-title">{{ $post->name }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <div class="form-row">
                            <a style="margin-right: 10px;" href="/posts/{{ $post->id }}" class="btn btn-primary">View</a>
                            <a style="margin-right: 10px;" href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/posts/{{$post->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        <hr>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection