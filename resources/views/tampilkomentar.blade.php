@extends('index')
@section('main')
<a href="{{route('komentar.create')}}" class="btn btn-primary"><h1>Tambah Data</h1></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Komentar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($data as $item)
    <tbody>
        <tr>
          <th scope="row">{{$loop->iteration}}</th><!-- menggunakan blade foreach -->
          <td>{{$item->nama}}</td>
          <td>{{$item->komentar}}</td>
          <td>
            <a href="{{route('komentar.edit',$item->id)}}" class="btn btn-warning">Edit</a>
          </td>
          <td>
            <form action="{{route('komentar.destroy',$item->id)}}" method="POST">
                @csrf
                @method('Delete')
                <button class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      </tbody>
    @endforeach
  </table>
@endsection