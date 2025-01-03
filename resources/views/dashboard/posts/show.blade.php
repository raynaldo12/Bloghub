@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="row mb-5">
           <div class="col-lg-8">
           
                 <h1 class="mb-3 mt-3">{{ $post->title }}</h1>
     
                 <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i> Back to all my posts</a>

                 <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><svg class="bi"><use xlink:href="#pencil-square"/></svg> Edit</a> 
     
                 <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><svg class="bi"><use xlink:href="#close"/></svg> Delete</button>
                </form>

                @if($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                 <article class="my-3 fs-5">
                 <p>{!! $post->body !!}</p>
                 </article>
     
             </div>
        </div>
     </div>
</main>
@endsection 