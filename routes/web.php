<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;

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
})->name('/');

Route::get('master', function () {
    return view('master');
})->middleware('admin_role');

Auth::routes();
Route::get('logout', function () {
     Session::flush();
     return redirect('/');
})->name('logout');
Route::get('agent/register', function () {
    return view('admin.add_agent');
})->name('add-agent')->middleware('admin_role');
Route::post('agent/register', [App\Http\Controllers\AgentController::class, 'addAgent'])->name('add_agent')->middleware('admin_role');
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin_role');
Route::get('agent/home', [App\Http\Controllers\HomeController::class, 'agentHome'])->name('agent.home')->middleware('user_role');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->name('admin.home')->middleware('Auth','user_role');
