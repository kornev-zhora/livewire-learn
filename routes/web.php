<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HelloWorld;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', HelloWorld::class);
