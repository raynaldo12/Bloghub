@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3 ">
    <div class="col-md-6">
        <form action="/posts">
           
            @if(request('category'))  {{-- nanti di url ada dua, ada search sama category sekaligus --}}
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if(request('author'))  {{-- nanti di url ada dua, ada search sama author sekaligus --}}
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
          
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-dark" type="submit">Search</button>
              </div>

        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    @if($posts[0]->image)
      <div style="max-height: 400px; overflow:hidden;">
      <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid" style="width: 100%; object-fit: cover; height: 100%;">
      </div>
    @else
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">
    @endif

    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p> 
        <small>By. <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
        </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a class="text-decoration-none btn btn-dark" href="/posts/{{ $posts[0]->slug }}">Read More</a>

    </div>
</div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>

                <div style="height: 250px; overflow: hidden;">
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                </div>
                
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p> 
                    <small>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </small>
                    </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-dark">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No post found</p>
@endif

<div class="d-flex justify-content-center"> 
{{ $posts->links() }} {{-- defaultnya menggunakan tailwind, tapi jika mau diubah ke bootstrap masuk ke file AppServiceProvider --}}
</div>

@endsection