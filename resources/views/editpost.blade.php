@extends('index')
@section('main')
<form action="{{route('post.update',$data->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">nama</label>
      <input type="text" class="form-control @error('nama')     is-invalid @enderror" name="nama" value="{{$data->nama}}">
    </div>
    <div class="mb-3">
      <label class="form-label">postingan</label>
      <input type="text" class="form-control @error('postingan') is-invalid @enderror " name="postingan" value="{{$data->postingan}}">
    </div>    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection