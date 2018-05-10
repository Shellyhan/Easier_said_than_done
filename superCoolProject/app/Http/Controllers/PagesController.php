<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home()
    {
      $fruits = ['apple','pear','grape'];
      return view('welcome', compact('fruits'));
    }


    public function about()
    {
      # code..
      return view('about');
    }
    
}
