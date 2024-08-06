<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main_controllers extends Controller
{
  public function get_about(){
    return view("about");

  }

  public function get_menu(){
    return view("menu");
}

public function get_booking(){
 return view("booking");
}
}