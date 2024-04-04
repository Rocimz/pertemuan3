@extends('index')
@section('main')
<form action="{{route('komentar.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label class="form-label">nama</label>
      <input type="text" class="form-control @error('nama')     is-invalid @enderror" name="nama" value="{{old('nama')}}">
    </div>
    <div class="mb-3">
      <label class="form-label">komentar</label>
      <input type="text" class="form-control @error('komentar') is-invalid @enderror " name="komentar" value="{{old('komentar')}}">
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection