<?php

use App\MyClass\Singleton;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singleton', function () {
    $singleton1 = Singleton::create();
    $singleton1->dark = 1;
    $singleton2 = Singleton::create();
    echo $singleton2->dark;
});
