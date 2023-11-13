@extends('layouts.main')

@section('container')
  <h3>Data Product</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($products as $product)
      <tr>  
        <td>{{$no++}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>
          <a href="/product/detail/{{$product->id}}" class="btn btn-primary">Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection