<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/test', function () {
    return config('app.env');
});

Route::get('/about', [MainController::class,'about']
// '/about',function(){
//     // if(true){
//     //     //return '<h1>Hello</h1>';
//     //     return redirect()->route('article');
    // }
    // return '<h1>You are not welcome</h1>';
    
// }
);

Route::get('admin/user/{id}',function($uid){
  return'user ID is <b>'.$uid. '</b>';
});

Route::get('get/from/this/data',function(){
    return '<h2>find some data from those things!</h2>';
})->name('article');