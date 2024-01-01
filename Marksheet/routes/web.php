<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvIder and all of them will
| be assigned to the "web" mIddleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/marksheet/{Id?}/{English?}/{Urdu?}/{Mathematics?}", function(
    $Id = "Insert valid Id!",
    $English = "N/A",
    $Urdu = "N/A",
    $Mathematics = "N/A"
) {

    $ObtainedTotal = $English + $Urdu + $Mathematics;
    $TotalMarks = 300;
    $Percentage = ($ObtainedTotal / $TotalMarks) * 100;


    if ($Percentage >= 90) {
        $Grade = 'A+';
    } elseif ($Percentage >= 80) {
        $Grade = 'A';
    } elseif ($Percentage >= 70) {
        $Grade = 'B';
    } elseif ($Percentage >= 60) {
        $Grade = 'C';
    } elseif ($Percentage >= 50) {
        $Grade = 'D';
    }
    else{
        $Grade = 'F';
    }
    return view("marksheet", compact("Id", "English", "Urdu", "Mathematics", "ObtainedTotal", "Percentage", "Grade"));
});

