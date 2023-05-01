<?php

namespace App\Http\Controllers\MakibaHome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()
    {
        return view("home") ;
    }
    public function contact()
    {
        return view("contact") ;
    }
}
