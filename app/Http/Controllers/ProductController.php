<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\AddFormValidation;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products=Product::with('category')->get();
        return view('dashboard.product.view-product',compact('products'));
    }
    public function create(){
        $categories=Category::all();
        return view('dashboard.product.create-product',compact('categories'));
    }
    public function store(AddFormValidation $request){
        $product = Product::create($request->all());
        return redirect()->back();
    }
    public function edit($id){
        $product=Product::findOrFail($id);
        $categories=Category::all();
        return view('dashboard.product.edit-product',compact('product','categories'));
    }
    public function update(Request $request,$id){

        $product=Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('view-product');
    }
    public function destroy($id){
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->route('view-product');
    }



}
