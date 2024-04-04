@extends('index')
@section('main')
<form action="{{route('user.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label class="form-label">nama</label>
      <input type="text" class="form-control @error('name')     is-invalid @enderror" name="name" value="{{old('name')}}">
    </div>
    <div class="mb-3">
      <label class="form-label">email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{old('email')}}">
    </div>    
    <div class="mb-3">
      <label class="form-label">password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}">
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection