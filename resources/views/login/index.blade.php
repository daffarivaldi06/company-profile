@extends('layouts.header')
@section('content')
<main class="form-signin w-100 m-auto">
    <form action="/login" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{session('loginError')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <div>  
        @endif
        <input type="text" name="username" class="form-control" id="username" autofocus required>
        <label for="username">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
        <label for="password">Password</label>
      </div>
  

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
  </main>
@endsection