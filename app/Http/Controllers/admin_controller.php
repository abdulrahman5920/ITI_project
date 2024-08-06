<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_controller extends Controller
{
    public function addcategory(){
        return view("addCategory");
    }
    public function additem(){
        return view("additem");
}
public function add_user()
{


     return view("addUser");
}
public function show_category(){
 return view("categories");
}
public function edit_category(){

 return view("editcategory");
}
public function edit_item(){
    return view("edititem");
}
public function logIn(){
    return view("adminlogin");
}
}