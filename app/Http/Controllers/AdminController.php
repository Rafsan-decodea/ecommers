<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;





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
       $request->validate([
            'title' => 'required|25',
            'description'=>'required',
            'slug' => 'required',
            'quantity' =>'required',
            'price' =>'required',
             'admin_id'=>'required',
       ]);


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
     if (count($request->image_product) > 0)
     {
         foreach($request->image_product as $image_name)
         {
        if ($request->hasFile('image_product'))
        {

            
            // $file = $request->file('image_product');

            $img_name = time() . '.'. $image_name->getClientOriginalExtension();
           
            if(!Storage::disk('public')->exists('products'))
            {
                Storage::disk('public')->makeDirectory('products');
            }

            $path = 'storage/products/'. $img_name;

            Image::make($image_name)->save($path);  


            $img_data = new ProductImage;
            $img_data->product_id = $product_obj->id;
            $img_data->images = $img_name;
            $img_data->save();
           
        }
        }
    }
        
        return view('admin.pages.create');




    }
}
