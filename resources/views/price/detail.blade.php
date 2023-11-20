@extends('layouts.main')

@section('container')
<h3>Detail</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Keluaran</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @php 
    $no = 1
    @endphp

    <tr>  
      <td>{{$no++}}</td>
      <td>{{$prices->name}}</td>
      <td>{{$prices->harga}}</td>
      <td>{{$prices->keluaran}}</td>
      <td>
        <a href="{{ route('price.all') }}" class="btn btn-primary">Kembali</a>
      </td>

    </tr>
  </tbody>
</table>

@endsection