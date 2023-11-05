<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
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

Route::get('email-test', function () {
    $details['email'] = "rangasamy.psg@gmail.com";
    dispatch(new App\Jobs\QueueJob($details));
    dd('Email send successfully');
});

Route::get('/payment', function () {
    echo Payment::process();
});

Route::get('/export-users',[UserController::class,'exportUsers'])->name('export-users');

Route::get('/image', [ImageController::class,'index'])->name('image.index');
Route::post('/image', [ImageController::class,'store'])->name('image.store');
Route::get('image/print/{id}','ImageController@show')->name('image.show');