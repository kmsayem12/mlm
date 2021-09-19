<?php

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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Backend\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Backend\Auth\RegisterController as AdminRegisterController;
use App\Http\Controllers\Backend\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Backend\Printer\HomeController as PrinterHomeController;

Route::namespace('Frontend')->group(function () {
    Route::get('/',[HomeController::class, 'index']);
    Route::get('/home',[ProfileController::class, 'index']);
});

Route::group(['prefix'=>'admin','namespace'=>'Backend'],function () {
    Route::namespace('auth')->group(function () {
        Route::get('/login',[AdminLoginController::class,'showLoginForm'])->name('admin.login');
        Route::post('/login',[AdminLoginController::class,'login'])->name('admin.login');
        Route::get('/logout',[AdminLoginController::class,'logout'])->name('admin.logout');
        Route::get('/register',[AdminRegisterController::class,'showRegisterForm'])->name('admin.register');
        Route::post('/register',[AdminRegisterController::class,'create'])->name('admin.register');
    });
});

Route::group(['as'=>'admin','prefix'=>'admin','namespace'=>'Backend','middleware'=>['auth:admin','admin']],function () {
    Route::namespace('Admin')->group(function () {
        Route::get('/',[AdminHomeController::class,'index']);
    });
});

Route::group(['prefix'=>'printer','namespace'=>'Backend','middleware'=>['auth:admin','printer']],function () {
    Route::namespace('Printer')->group(function () {
        Route::get('/',[PrinterHomeController::class,'index']);
    });
});

Auth::routes();
Route::get('/logout',[LoginController::class,'logout'])->name('user.logout');
