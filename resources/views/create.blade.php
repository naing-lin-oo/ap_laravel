@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header" style="text-align: center;">
                New Post
            </div>
            <div class="card-body">
            <!-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->
                <form action="/posts" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input value="{{ old('name') }}" type="text" name="name" class="form-control" placeholder="Enter Blog Title">  
                    </div>
                    @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea value="{{ old('description') }}" type="textarea" name="description" class="form-control"  placeholder="Enter Blog Description"></textarea>
                    </div>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/posts" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection