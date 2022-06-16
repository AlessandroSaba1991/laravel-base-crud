<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
   {
    $comics= Comic::all()->take(2);
    return view('home',compact('comics'));
   }
}
