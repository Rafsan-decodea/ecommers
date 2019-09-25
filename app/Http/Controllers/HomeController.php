<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }
    public function products()
    {
        return view('pages.products');
    }
}
