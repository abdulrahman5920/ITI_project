<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\category;

class FormController extends Controller
{
    public function submit(Request $request)
    {
       
        $request->validate([
  'addcategorybox' => 'required|string|max:150'
        ]);

     
        $new_categ = new category();
       
        $new_categ->category_name = $request->addcategorybox;
        $new_categ->save();

       
        return redirect()->back()->with('success', 'Category Inserted successfully!');
    }

}
