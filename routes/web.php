<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\LogoutController;



Route::get('/', function () {
    return view('admin.admin');
});

Route::get('/portofolio', [PortoController::class, 'index'])->name('porto');



Auth::routes(['confirm' => true,'register']);

//Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
