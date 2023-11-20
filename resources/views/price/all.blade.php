@extends('layouts.main')

@section('container')
  <h3>Data price</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Harga</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($prices as $price)
      <tr>  
        <td>{{$no++}}</td>
        <td>{{$price->name}}</td>
        <td>{{$price->harga}}</td>
        <td>
          <a href="/price/detail/{{$price->id}}" class="btn btn-primary">Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection