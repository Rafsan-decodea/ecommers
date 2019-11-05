<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Image;





class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }
    public function create()

    {
        return view('admin.pages.create');
    }
    public function store(Request $request)
    {

        $product_obj = new Product;
        $product_obj->catagory_id = $request->catagory_id;
        $product_obj->brand_id = $request->brand_id;
        $product_obj->title = $request->title;
        $product_obj->description = $request->description;
        $product_obj->slug = $request->slug;
        $product_obj->quantity = $request->quantity;
        $product_obj->price = $request->price;
        $product_obj->status =1;
        $product_obj->offer_price = $request->offer_price;
        $product_obj->admin_id= $request->admin_id;
        $product_obj->save();

        if ($request->hasFile('ProductImage'))
        {
            $image = $request->file('ProductImage');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('/'.$img);
            Image::make($img)->save($location);

            $img_data = new ProductImage;
            $img_data->product_id = $product_obj->product_id;
            $img_data->Image = $img;
            $img_data->save();


        }
        return view('admin.pages.create');




    }
}
