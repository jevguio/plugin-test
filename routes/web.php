<?php
use Illuminate\Support\Facades\Route;

Route::get('/hello-plugin', function () {
    return 'Hello from HelloWorld plugin!';
})->name('test.plugin');

