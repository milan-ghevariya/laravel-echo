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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send', function () {
    event(new \App\Events\SendMessage(['name' => 'Milan Ghevariya', 'contact' => '8154804998']));
    dd('Event Run Successfully.');
});

Route::view('receive','receive');
