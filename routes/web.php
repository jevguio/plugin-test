<?php
use Illuminate\Support\Facades\Route;

Route::get('/hello-plugin', function () {
    
    return view('helloworld::helloworld'); // ← explanation below
})->middleware(['auth'])->name('test.plugin');

