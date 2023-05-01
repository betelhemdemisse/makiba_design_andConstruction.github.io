<?php

namespace App\Http\Controllers\design_and_construction;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class design_and_construction_Controller extends Controller
{
    public function Residential_Design()
    {
    return view("design_and_construction.metal_works");
    }
    public function Commercial_Design()
    {
    return view("design_and_construction.metal_works");
    }
    public function Modeling_Rendering()
    {
    return view("design_and_construction.metal_works");
    }
}
