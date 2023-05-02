<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakibaHome\HomePageController;
use App\Http\Controllers\contract_works\contract_worksController;
use App\Http\Controllers\design_and_construction\design_and_construction_Controller;
use App\Http\Controllers\furnitures\furnituresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('main header/final_header');
// });
Route::get('/portfolio', [HomePageController::class, 'portfolio'])->name('makiba.portfolio');
Route::get('/makiba', [HomePageController::class, 'home'])->name('makiba.home');
 Route::get('/contract_works', [contract_worksController::class, 'contractworks'])->name('contract.works');
 Route::get('/metal', [contract_worksController::class, 'metal_works'])->name('metal.works');
 Route::get('/gybsum', [contract_worksController::class, 'gybsum_works'])->name('gybsum.works');
 Route::get('/sanitary', [contract_worksController::class, 'sanitary_works'])->name('sanitary.works');
 Route::get('/electrical', [contract_worksController::class, 'electrical_works'])->name('electrical.works');

 Route::get('/Order_Custom_Makiba_Furnitures', [furnituresController::class, 'Order_Custom_Makiba_Furnitures'])->name('Order_Custom_Makiba_Furnitures.works');
 Route::get('/Sofa', [furnituresController::class, 'Sofa'])->name('Sofa.works');
 Route::get('/Bed', [furnituresController::class, 'Bed'])->name('Bed.works');
 Route::get('/Wardrop', [furnituresController::class, 'Wardrop'])->name('Wardrop.works');
 Route::get('/Dinning_Table', [furnituresController::class, 'Dinning_Table'])->name('Dinning_Table.works');
 Route::get('/Tv_Stand', [furnituresController::class, 'Tv_Stand'])->name('Tv_Stand.works');
 Route::get('/Coffee_table', [furnituresController::class, 'Coffee_table'])->name('Coffee_table.works');
 Route::get('/Shelf', [furnituresController::class, 'Shelf'])->name('Shelf.works');
 Route::get('/Office_Table', [furnituresController::class, 'Office_Table'])->name('Office_Table.works');
 Route::get('/Kitchen_Cabinet', [furnituresController::class, 'Kitchen_Cabinet'])->name('Kitchen_Cabinet.works');
 
 Route::get('/Residential_Design', [design_and_construction_Controller::class, 'Residential_Design'])->name('Residential_Design.works');
 Route::get('/Commercial_Design', [design_and_construction_Controller::class, 'Commercial_Design'])->name('Commercial_Design.works');
 Route::get('/3D_Modeling_Rendering', [design_and_construction_Controller::class, 'Modeling_Rendering'])->name('3D_Modeling_Rendering.works');

 Route::get('/contact', [HomePageController::class, 'contact'])->name('contact.works');
