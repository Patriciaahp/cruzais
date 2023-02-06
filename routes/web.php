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

Route::get('/', \App\Http\Livewire\Cover::class)->name('cover');

Route::get('/intro', \App\Http\Livewire\Intro::class)->name('intro');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::get('/welcome', \App\Http\Livewire\IntroCompleted::class)->name('welcome');
Route::get('/account', \App\Http\Livewire\ChooseLogin::class)->name('account');
