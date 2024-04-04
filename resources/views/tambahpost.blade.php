@extends('index')
@section('main')
<form action="{{route('post.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label class="form-label">nama</label>
      <input type="text" class="form-control @error('nama')     is-invalid @enderror" name="nama" value="{{old('nama')}}">
    </div>
    <div class="mb-3">
      <label class="form-label">postingan</label>
      <input type="text" class="form-control @error('postingan') is-invalid @enderror " name="postingan" value="{{old('postingan')}}">
    </div>    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection