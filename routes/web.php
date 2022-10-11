<?php

use Illuminate\Support\Facades\Route;



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/',function (){
    return 'home';
});

