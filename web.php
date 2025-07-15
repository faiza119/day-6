<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Welcome to My Laravel App!';
});
Route::get('/blade', function () {
    return view('hello');
});


Route::get('/greeting', function () {
    return view('greeting', ['name' => 'Faiza']);
});
use App\Http\Controllers\PageController;

Route::get('/message', [PageController::class, 'showMessage']);
Route::get('/blade-view', [PageController::class, 'showBlade']);
Route::get('/layout-home', function () {
    return view('home');
});
Route::get('/cvo', function () {
    return view('home');
});
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/submit-form', [ContactController::class, 'handleForm']);

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/submit-form', [ContactController::class, 'handleForm']);

