@extends('layouts.frontendLayouts')
@section('title', 'Add post')


@section('content')
    <section>
      <div class="container">
        <div class="card col-lg-5 mx-auto mt-5">
          <div class="card-header">Add Post</div>
          <div class="card-body">

            <form action="{{ route('store') }}" method="POST">
              @csrf
              <input name="title" placeholder="Post title" type="text" class="form-control mb-2">
              @error('title')
                <span class="text-danger"> {{ $message }} </span>
              @enderror
              <input name="detail" placeholder="Post Detail" type="text" class="form-control mb-2">
              @error('detail')
                <span class="text-danger"> {{ $message }} </span>
              @enderror
              <input name="author" placeholder="Author Name" type="text" class="form-control mb-2">
              <button class="btn btn-primary" type="submit">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </section>
@endsection
