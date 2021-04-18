<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Category;
use Yajra\Datatables\Datatables;
class CategoryController extends Controller
{
    //return view for cretegories
    public function index(Type $var = null)
    {
        return view('backend.cagetory');
    }

    //Create category
    public function create(Request $request)
    {
    
        $request->validate([
            'category_name'=> 'reuired|min:3|max:255',
        ]);
        $slug = Str::slug($request->category_name);

        $category = Category::create([
            'name'=>$request->category_name,
            'slug'=>$slug,
        ]);
        return "Success";








        // $res=new Category;
        // $res->name=$request->name;
        // $res->save();
        // $request->session()->flash('msg','Data Submited');
        // // return redirect('/');
        // return view('backend.cagetory');

    }

    // Gettting al the categoru using data tablles
    public function getAllCategories(Type $var = null)
    {
      dd('');
    }
}

