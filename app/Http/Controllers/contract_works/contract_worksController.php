<?php

namespace App\Http\Controllers\contract_works;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contract_worksController extends Controller
{
   public function contractworks()
   {
     return view("contractWorks.contractWorks") ;
   }
   public function metal_works()
   {
    return view("contractWorks.metal_works") ;
   }
   public function gybsum_works()
   {
    return view("contractWorks.gybsum") ;
   }
   public function sanitary_works()
   {
    return view("contractWorks.sanitary") ;
   }
   public function electrical_works()
   {
    return view("contractWorks.electrical") ;
   }
}
