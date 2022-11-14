<?php

use App\Http\Controllers\User\CustomerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');      // ->middleware('thawkhant')

    Route::group(['prefix' => 'customer','middleware' => 'thawkhant'],function(){
        Route::get('home',[CustomerController::class,'home']);
        Route::get('about',[CustomerController::class,'about']);
        Route::get('service',[CustomerController::class,'service']);

    });

    Route::get('userPage',function(){
        return "userPage";
    })->middleware('thawkhant');

});

//Route::get('one',function(){
//    return "one";
//});
//
//Route::get('two',function(){
//    return "two";
//})->middleware('thawkhant');
//
//Route::get('three',function(){
//    return "three";
//});

Route::middleware('thawkhant')->group(function (){   // group net call dar

    Route::get('one',function(){
    return "one";
});

Route::get('two',function(){
    return "two";
})->middleware('thawkhant');

Route::get('three',function(){
    return "three";
});
});

// group net yae lite dar par sir
//Route::group(['prefix' => 'customer','middleware' => 'thawkhant'],function(){
//    Route::get('home',[CustomerController::class,'home']);
//    Route::get('about',[CustomerController::class,'about']);
//    Route::get('service',[CustomerController::class,'service']);
//
//});

//Route::get('customer/home',[CustomerController::class,'home']);
//Route::get('customer/about',[CustomerController::class,'about']);
//Route::get('customer/service',[CustomerController::class,'service']);

// middleware
// middle run as every url
// 1. middleware create  | 2. Declare middleware at Kernal  | 3. Use Middleware
