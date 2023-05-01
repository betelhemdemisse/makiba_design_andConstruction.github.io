<?php

namespace App\Http\Controllers\furnitures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class furnituresController extends Controller
{
    public function Bed()
   {
     return view("furnitures.bed") ;
   }
   public function Sofa()
   {
    return view("furnitures.sofa") ;
   }
   public function Wardrop()
   {
    return view("furnitures.wardrop") ;
   }
   public function Dinning_Table()
   {
    return view("furnitures.Ddinning_able") ;
   }
   public function Tv_Stand()
   {
    return view("furnitures.tv_stand") ;
   }
   public function Coffee_table()
   {
     return view("furnitures.coffee_table") ;
   }
   public function Shelf()
   {
    return view("furnitures.shelf") ;
   }
   public function Office_Table()
   {
    return view("furnitures.office_table") ;
   }
   public function Kitchen_Cabinet()
   {
    return view("furnitures.kitchen_cabinet") ;
   }
   public function Order_Custom_Makiba_Furnitures()
   {
    return view("furnitures.order_custom") ;
   }
}
