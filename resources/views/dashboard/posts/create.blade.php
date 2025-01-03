@extends('dashboard.layouts.main')

@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
    <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data"> {{-- enctype  agar form bisa menangani file --}}
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
            @if(old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
        </select>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label" id="image">Post Image</label>
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"> {{-- @error('image') image itu dari name) --}}
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Body</label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
           @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Create post</button>
      </form>
    </div>
</main>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){ //ini untuk membuat agar di tab ke slug, otomatis akan terisi value berdasassrkan title
    fetch('/dashboard/posts/checkSlug?title=' + title.value) //apa yang kita isi ke title akan masuk ke method ini, dikemblaikan sebagai slug 
      .then(response => response.json()) //response akan dijalankan ke json
      .then(data => slug.value = data.slug) //data ke slug value dan yang propertinya slug
  });

  document.addEventListener('trix-file-accept', function(event){
    event.preventDefault();
  })
</script>

@endsection