<?php

use App\Http\Controllers\DropdownController;
use App\Http\Controllers\PostController;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

// auto Load more 
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

//send email
Route::get('/mail',function(){
    if(Mail::to('masud.rana3836@gmail.com')
                        ->send(new HelloMail("Hi there")))
            
        {
            dd("Success");

        }

});

// Laravel Birthday notificatio via laravel default mail
Route::get('/user-notify',[PostController::class,'notification']);

// Dependent Dropdown
Route::get('/dropdown',[DropdownController::class,'index']);
Route::post('/api/fetch-states',[DropdownController::class,'fetchState']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);
