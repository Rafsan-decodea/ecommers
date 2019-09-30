<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }
    public function products()
    {
        $data['product'] = Product::orderBy('id','desc')->get();
        $data['productImage']=ProductImage::orderBy('id','desc')->get();
        return view('pages.products',$data);
    }
}
