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

Route::get("/", function () {
    return view("welcome");
});

/* Task: Create 10 distinct routes, each with a unique purpose. */
/* 1. Assign distinct names to both the route and the associated view. */

Route::get("/Alphabet", function () {
    return view("Alphabet");
});

/* 2. Use the same name for both the route and the associated view. */

Route::get("/{year}", function ($year) {
    if (($year % 100 != 0) && ($year % 4 == 0)) {
        echo $year." is a leap year!";
    }
    else {
        echo $year." is not a leap year!";
    }
});

/* 3. Create a route with a required parameter. */

Route::get("/show/{id}", function ($id) {
    return view("EvenOdd");
});

/* 4. Develop a route with optional parameters, including two optional parameters. */

Route::get("/no/{Id?}/{Name2?}", function ($Id = null, $Name = null) {
    if ($Id !== null || $Name !== null) {
    return "Id: $Id , Name: $Name";
    }
    else{
        return view("abc");
    }
});

/* Apply all 6 where constraints across 6 separate routes. */
/*Constraints*/

Route::get("/xyz/{a?}", function ($a = null) {
    echo "Id: " . $a;
})->whereNumber("a");


Route::get("/mno/{b?}", function ($b = null) {
    echo "Name: " . $b;
})->whereAlpha("b");


Route::get("/klm/{c?}", function ($c = null) {
    echo "Age: " . $c;
})->whereAlphaNumeric("c");


Route::get("/pqr/{d?}", function ($d = null) {
    echo "Number: " . $d;
})->where("d", "[0-9]+");


Route::get("/efg/{e?}", function ($e = null) {
    echo "Education: " . $e;
})->whereIn("e", ["School", "College", "University"]);


Route::get("/vwx/{f?}", function ($f=null) {
    echo "Surname: ".$f;
})->where("f", "[A-Z a-z]+");
