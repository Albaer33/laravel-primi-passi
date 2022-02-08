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
    $data = [
        'name' => 'Alberto',
        'lastname' => 'Lisi',
        'age' => 25,
        'hobbies' => [
            'programming',
            'computer',
            'motorcycle',
            'gym',
            'trekking',
            'lot of motorcycle',
        ]
    ];

    return view('home', $data);
})->name('homepage');

