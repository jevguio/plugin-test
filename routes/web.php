<?php
use App\Http\Controllers\PluginController;
use Illuminate\Support\Facades\Route;

Route::get('/hello-plugin', function () {
    return 'Hello from HelloWorld plugin!';
});

Route::post('/upload-plugin', [PluginController::class, 'upload'])->name('plugin.upload');
