<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.all', [
        "title"  => "orders",
        "orders" => Order::all()
        ]);
    }
    public function show($order)
    {
      return view('order.detail', [
        "title" => "detail-order",
        "order" => Order::find($order)
      ]);
    }
}
