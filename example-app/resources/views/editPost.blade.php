@extends('layouts.frontendLayouts')
@section('title', 'Add post')


@section('content')
    <section>
      <div class="container">
        <div class="card col-lg-5 mx-auto mt-5">
          <div class="card-header">Edit Post</div>
          <div class="card-body">

            <form action="" method="POST">
              @csrf
              <input value="{{ $post->title}}" name="title" placeholder="Post title" type="text" class="form-control mb-2">
              @error('title')
                <span class="text-danger"> {{ $message }} </span>
              @enderror
              <input value="{{ $post->detail }}" name="detail" placeholder="Post Detail" type="text" class="form-control mb-2">
              @error('detail')
                <span class="text-danger"> {{ $message }} </span>
              @enderror
              <input value="{{ $post->author }}" name="author" placeholder="Author Name" type="text" class="form-control mb-2">
              <button class="btn btn-primary" type="submit">Update</button>
            </form>

            @if (session()->has('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

          </div>
        </div>
      </div>
    </section>
@endsection
