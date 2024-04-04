@extends('index')
@section('main')
<form action="{{route('komentar.update',$data->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">nama</label>
      <input type="text" class="form-control @error('nama')     is-invalid @enderror" name="nama" value="{{$data->nama}}">
    </div>
    <div class="mb-3">
      <label class="form-label">komentar</label>
      <input type="text" class="form-control @error('komentar') is-invalid @enderror " name="komentar" value="{{$data->komentar}}">
    </div>    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection