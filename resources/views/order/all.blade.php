@extends('layouts.main')

@section('container')
  <h3>Data Order</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($orders as $order)
      <tr>  
        <td>{{$no++}}</td>
        <td>{{$order->customer_name}}</td>
        <td>{{$order->total_amount}}</td>
        <td>
          <a href="/order/detail/{{$order->id}}" class="btn btn-primary">Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection