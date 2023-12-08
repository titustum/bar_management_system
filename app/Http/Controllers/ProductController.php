<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function add(Request $request){

        $validatedData = $request->validate([
            "addedby"=>"required",
            "name"=>"required",
            "quantity"=>"required|numeric",
            "buying_price"=>"required|numeric",
            "selling_price"=>"required|numeric",
            "category"=>"required",
        ]);

        // print_r($validatedData);

        Product::create($validatedData);
        return back()->with('success', "{$request->post('name')} added successfuly!");
    }
}
