@extends('layouts.frontendLayouts')
@section('title', 'All Post')


@section('content')
    <section>
      <div class="container">
        
        <div class="table-responsive mt-5 text-center">
          <table class="table">
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Detail</th>
              <th>Author</th>
              <th></th>
            </tr>

            @foreach ($posts as $key=> $post )
                
             <tr>
               <td>{{ $posts->firstItem() + $key }}</td>
               <td>{{ $post->title }}</td>
               <td>{{ str($post->detail)->substr(0, 16)->lower().'...' }}</td>
               <td>{{ $post->author }}</td>
               <td>
                 <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="{{ route('edit', $post->id)}}">Edit</a>
                  <a class="btn btn-sm btn-danger" href="{{ route('delete', $post->id)}}">Delete</a>
                </div>
               </td>
             </tr>

            @endforeach
          </table>
          {{ $posts->links() }}
        </div>

      </div>
    </section>
@endsection()
