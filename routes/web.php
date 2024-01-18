<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::get('/homepage', HomeController::class)->name('homepage');
Route::controller(PostController::class)->name('posts.')->group(function () {
    Route::get('/blog', 'index')->name('index');
    Route::get('/blog/{post:slug}', 'show')->name('show');
});

Route::get('/artisan-cache-clear', function(){
    $command = 'cache:clear';
    Artisan::call($command);
    return redirect()->back();
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
