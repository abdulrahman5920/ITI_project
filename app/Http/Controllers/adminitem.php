<?php

namespace App\Http\Controllers;
use App\Models\add_item;
use Illuminate\Http\Request;
use App\Models\Category;
class adminitem extends Controller
{
    public function create()
    {
       
        $categories = category::all('category_name');
        return view('additem', compact('categories'));
    }
    public function submit(Request $request)
    {
            
    $request->validate([
        'product_name' => 'required|string|max:150',
        'description' => 'required|string|max:150',
        'pic' => 'required|blob',
        'product_category' => 'required|string|max:150',
        'price' => 'required|int',
        'category_id' => 'required|exists:categories,id',
    ]);
        $new_item = new add_item();
        $new_item->product_name= $request->title;
        $new_item->description = $request->description;
        $new_item->pic = $request->image;
       $new_item->product_category = $request->tag;
        $new_item->price = $request->price;
        $new_item->category_id = $request->category_id;
       $new_item->save();
       return redirect()->back()->with('success', 'item Inserted successfully!');
    }
}
