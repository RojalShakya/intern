<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('dashboard.category.createcategory');
    }
    public function store(Request $request){
        $category=Category::create($request->all());
        return redirect()->back();
    }
    public function view(){
        $categories=Category::all();
        return view('dashboard.category.view-category',compact('categories'));
    }
}
