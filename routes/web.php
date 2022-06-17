<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/about', function () {
    return view('about',[
        'title'=>'About']);
});
Route::get('/product', [DashboardController::class,'showHome'], function () {
    return view('product',[
        'title'=>'Product']);
});
Route::get('login', function () {
    return view('login',[
        'title'=>'Login']);
});

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// in dashboard

// product dashboard
Route::view('/dashboard/product','dash-product',[DashboardController::class,'index'])->name('dash-product');
Route::get('/dashboard/product',[DashboardController::class,'index'])->name('dash-product');
// show product
Route::get('/show/{code_product}',[DashboardController::class,'edit'],'edit-data')->name('show-data');
// delete product
Route::get('/delete/{code_product}',[DashboardController::class,'destroy'],'delete-data')->name('delete-data');
// update product
Route::post('/update/{code_product}',[DashboardController::class,'update'],'update-data')->name('update-data');

// add product dashboard
// Route::view('/dashboard/addproduct','dash-productadd') -> name('dash-productadd');
Route::get('/dashboard/addproduct',[DashboardController::class,'create'])->name('dash-productadd');
Route::post('/dashboard/insertdata',[DashboardController::class,'store'],'inserdata')->name('insertdata');



// menu home after login
Route::view('/','home',[
    'title'=>'Home']) -> name('home');

// Route::get('/product',[DashboardController::class,'index'])->name('home-product');
