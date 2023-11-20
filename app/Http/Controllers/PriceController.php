<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\price;

class PriceController extends Controller
{
 public function index()
 {
    return view('price.all', [
        "title"  => "price",
        "prices" => price::all()
        ]);
 }
 public function show($prices)
    {
      return view('price.detail', [
        "title" => "detail-price",
        "prices" => price::find($prices)
      ]);
    }
}
