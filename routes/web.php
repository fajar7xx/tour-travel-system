<?php

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




// admin dashboard
Route::group(['prefix' => 'administrator'], function(){
    
    Route::get('login', 'Admin\AuthController@login')->name('administrator.login');


    Route::get('/', function(){
        return view('admin.dashboard');
    })->name('administrator.dashboard');
});


Route::get('/', function () {
    return view('welcome');
});
// site frontend
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
