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
    return view('welcome');
});

Route::get('/abc', function () {
    return view('Alphabet');
});

/* Even Odd */
Route::get('/show/{id}', function (string $id) {
    if ($id % 2 == 0) {
        echo $id." is Even!";
    }
    else {
        echo $id." is Odd!";
    }
});

/* Leap Year */
Route::get('/see/{year}', function ($year) {
    if (($year % 100 != 0) && ($year % 4 == 0)) {
        echo $year." is a leap year!";
    }
    else {
        echo $year." is not a leap year!";
    }
});

/* Factorial */
Route::get('/calculate/{no}', function (int $no) {
    $factorial = 1;

    for ($x = $no; $x >= 1; $x--) {
        $factorial = $factorial * $x;
    }

    echo "Factorial of $no is $factorial";
});
