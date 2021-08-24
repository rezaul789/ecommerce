<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class,'index'])->name('index');

Route::prefix('staff')->name('staff.')->middleware(['auth'])->group(function (){

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::resource('users',UserController::class);

});

require __DIR__.'/auth.php';
