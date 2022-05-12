<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*  Admin Routes */
Route::prefix('admin')->group(function(){
  Route::get('/login',[AdminController::class,'index'])->name('login_form');
  Route::post('/login/owner',[AdminController::class,'login'])->name('admin_login');
  Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('admin');
  Route::get('/logout',[AdminController::class,'logout'])->name('admin_logout')->middleware('admin');
  Route::get('/registration',[AdminController::class,'registration'])->name('admin_register');
  Route::post('/registration/create',[AdminController::class,'register'])->name('admin.register.create');
});
/*  End Admin Routes */

/*  Seller Routes */
Route::prefix('seller')->group(function(){
  Route::get('/login',[SellerController::class,'index'])->name('seller_login');
  Route::post('/login/owner',[SellerController::class,'login'])->name('seller_log');
  Route::get('/dashboard',[SellerController::class,'dashboard'])->name('seller.dashboard')->middleware('seller');
  Route::get('/logout',[SellerController::class,'logout'])->name('seller_logout')->middleware('seller');
  Route::get('/registration',[SellerController::class,'registration'])->name('seller_register');
  Route::post('/registration/create',[SellerController::class,'register'])->name('seller.register.create');
});
/*  End Seller Routes */



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
