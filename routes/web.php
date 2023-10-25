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
        'title' => 'Home',
        'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia vero ullam, dolorem, eius est, rem ad laudantium assumenda consequuntur consequatur eum eveniet quo dignissimos sapiente itaque. Rerum, laborum! Laborum.',
    ];


    return view('home', $data);
})->name('home');

Route::get('/about', function () {

    $data = [
        'title' => 'About',
        'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia vero ullam, dolorem, eius est, rem ad laudantium assumenda consequuntur consequatur eum eveniet quo dignissimos sapiente itaque. Rerum, laborum! Laborum.',
    ];


    return view('about', $data);
})->name('about');

Route::get('/contacts', function () {

    $data = [
        'title' => 'Contacts',
        'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia vero ullam, dolorem, eius est, rem ad laudantium assumenda consequuntur consequatur eum eveniet quo dignissimos sapiente itaque. Rerum, laborum! Laborum.',
    ];


    return view('contacts', $data);
})->name('contacts');
