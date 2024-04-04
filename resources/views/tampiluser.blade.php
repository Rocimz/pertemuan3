@extends('index')
@section('main')
<a href="{{route('user.create')}}" class="btn btn-primary"><h1>Tambah Data</h1></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($data as $item)
    <tbody>
        <tr>
          <th scope="row">{{$loop->iteration}}</th><!-- menggunakan blade foreach -->
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>
            <a href="{{route('user.edit',$item->id)}}" class="btn btn-warning">Edit</a>
          </td>
          <td>
            <form action="{{route('user.destroy',$item->id)}}" method="POST">
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