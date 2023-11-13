<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {   
        return view('product.all', [
        "title"  => "products",
        "products" => Product::all()
        ]);
    }
    public function show($product)
    {
      return view('product.detail', [
        "title" => "detail-product",
        "product" => Product::find($product)
      ]);
    }
}