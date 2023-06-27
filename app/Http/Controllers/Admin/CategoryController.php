<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.categories.create');
    }
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    // public function store(StoreCategoryRequest $request)
    // {
    //     $dbName= null;
    //         //dd($request);
    //          $menu = Menu::find($request->menu_id);
    //          //dd($request->blog_id);
    //         $image = $request->image;
    //         //dd($image);
    //          if($request->image){
    //             $dbName = 'menu-image-'.time().'.'.$image->clientExtension();
    //             $source = $image->getRealPath();
    //             //dd($source);
    //             $destination = 'uploads/menus/'.$dbName;
    //             copy($source,$destination);

    //          }

    //          Category::create([
    //             'name'=>$request->name,
    //             'image'=>$dbName,
    //             'description'=>$request->description,

    //          ]);
    // }

    public function store(StoreCategoryRequest $request)
    {
        $image = $request->file('image')->store('public/categories');

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        return to_route('categories.index')->with('success', 'Category created successfully.');
    }

}
