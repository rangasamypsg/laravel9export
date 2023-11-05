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

Route::get('/image/{image}', ImageController::class .'@show')->name('image.show');

// Route::get('/', PostController::class .'@index')->name('posts.index');
// // returns the form for adding a post
// Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// // adds a post to the database
// Route::post('/posts', PostController::class .'@store')->name('posts.store');
// // returns a page that shows a full post
// Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// // returns the form for editing a post
// Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// // updates a post
// Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// // deletes a post
// Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');