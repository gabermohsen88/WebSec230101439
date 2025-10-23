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

Route::get('/minitest', function () {
    $bill = [
        ['item' => 'Apple', 'quantity' => 3, 'price' => 5],
        ['item' => 'Bread', 'quantity' => 2, 'price' => 10],
        ['item' => 'Milk', 'quantity' => 1, 'price' => 15],
    ];

    return view('minitest', ['bill' => $bill]);
});
Route::get('/transcript', function () {
    $courses = [
        ['course' => 'Mathematics', 'grade' => 'A'],
        ['course' => 'Physics', 'grade' => 'B+'],
        ['course' => 'Chemistry', 'grade' => 'A-'],
        ['course' => 'Computer Science', 'grade' => 'A'],
    ];

    return view('transcript', ['courses' => $courses]);
});

Route::get('/products', function () {
    $products = [
        [
            'name' => 'Laptop',
            'image' => 'https://via.placeholder.com/150',
            'price' => 500,
            'description' => 'High performance laptop'
        ],
        [
            'name' => 'Smartphone',
            'image' => 'https://via.placeholder.com/150',
            'price' => 300,
            'description' => 'Latest model smartphone'
        ],
        [
            'name' => 'Headphones',
            'image' => 'https://via.placeholder.com/150',
            'price' => 50,
            'description' => 'Noise-cancelling headphones'
        ]
    ];

    return view('products', ['products' => $products]);
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/gpa', function () {
    $courses = [
        ['code' => 'MATH101', 'title' => 'Mathematics', 'credit' => 3],
        ['code' => 'PHY101', 'title' => 'Physics', 'credit' => 4],
        ['code' => 'CHEM101', 'title' => 'Chemistry', 'credit' => 3],
        ['code' => 'CS101', 'title' => 'Computer Science', 'credit' => 3],
    ];

    return view('gpa', ['courses' => $courses]);
});

use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);
