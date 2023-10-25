<?php

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

    $data = [
        'title' => 'Hello World',
        'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia vero ullam, dolorem, eius est, rem ad laudantium assumenda consequuntur consequatur eum eveniet quo dignissimos sapiente itaque. Rerum, laborum! Laborum.',
    ];


    return view('home', $data);
});
