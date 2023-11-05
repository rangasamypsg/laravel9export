<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

