<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/hello-plugin', function () {

    if (Auth::check()) {
        // User is logged in
        $user = Auth::user();
    }
    

    return view('helloworld::helloworld'); // ← explanation below
})->name('test.plugin');

