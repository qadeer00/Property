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

Route::get('/', function () {
    return view('signin');
});
Route::get('master', function () {
    return view('agent.master')->middleware('admin_role');
});

Auth::routes();

    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->middleware('admin_role');
Route::get('agent/home', [App\Http\Controllers\HomeController::class, 'agentHome'])->middleware('user_role');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->name('admin.home')->middleware('Auth','user_role');
