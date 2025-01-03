@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">     
                @csrf           
              <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}"> {{-- old untuk mengambil inputan yang lama --}}
                <label for="name">Name</label>
                @error('name') {{-- kalo namenya error, munculkan feedback --}}
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required value="{{ old('password') }}">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
          
              <button class="btn btn-dark w-100 py-2 mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already have an account? <a href="/login">Login</a></small>
          </main>
    </div>
</div>



@endsection 