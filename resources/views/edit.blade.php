@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header" style="text-align: center;">
                Edit Post
            </div>
            <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="/posts/{{$post->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input value="{{ old('name', $post->name) }}" type="text" name="name" class="form-control" placeholder="Enter Blog Title">                        
                    </div>
                    <!-- @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror   -->
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea type="textarea" name="description" class="form-control"  placeholder="Enter Blog Description">{{ old('description', $post->description) }}</textarea>
                    </div>
                    <!-- @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror   -->

                    <div class="form-group">
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ $cat->id == $post->category_id ? 'selected' : ''}}> {{ $cat->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/posts" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection