<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfmsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

//admin
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/ofms',[AdminController::class,'adminGetOfms'])->name('admin.ofms');
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|x
*/
Route::get('/ofms', [OfmsController::class, 'index'])->name('admin.ofms');

Route::get('hello-world',function(){
    return view('hello-world');
});

Route::get('/welcome', [PostController::class, 'index'])->name('user.welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
