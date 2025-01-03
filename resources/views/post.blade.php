@extends('layouts.main')

@section('container')
<div class="container">
   <div class="row justify-content-center mb-5">
      <div class="col-md-8">
         <h1 class="mb-3">{{ $post->title }}</h1>

         <p>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in 
            <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
         </p>

         {{-- Wrapper untuk gambar dengan rasio aspek yang konsisten --}}
         @if($post->image)
         <div class="image-container position-relative mb-3">
            <img src="{{ asset('storage/' . $post->image) }}" 
                 alt="{{ $post->category->name }}" 
                 class="post-image img-fluid">
         </div>
         @else
         <div class="image-container position-relative mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
                 alt="{{ $post->category->name }}" 
                 class="post-image img-fluid">
         </div>
         @endif

         <article class="my-3 fs-5">
            <p>{!! $post->body !!}</p>
         </article>

         <a href="/posts" class="btn btn-dark mt-3">Back to Posts</a>
      </div>
   </div>
</div>

<style>
/* Container gambar dengan rasio aspek yang konsisten */
.image-container {
    width: 100%;
    height: 0;
    padding-bottom: 56.25%; /* Rasio 16:9 */
    overflow: hidden;
    position: relative;
}

/* Styling untuk gambar */
.post-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

/* Media query untuk perangkat mobile */
@media (max-width: 768px) {
    .image-container {
        padding-bottom: 75%; /* Rasio 4:3 untuk mobile */
    }
}

/* Media query untuk tablet */
@media (min-width: 769px) and (max-width: 1024px) {
    .image-container {
        padding-bottom: 65%; /* Rasio custom untuk tablet */
    }
}

/* Opsional: efek hover pada gambar */
.post-image:hover {
    transform: scale(1.02);
}
</style>
@endsection