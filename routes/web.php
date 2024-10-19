<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BdtextileController;
use App\Http\Controllers\StudentController;
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
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});



//Route::resource('/route1', [BdtextileController::class,'index']);

// Route::get('/contact', [BdtextileController::class,'index']);
// Route::get('/contact/create', [BdtextileController::class,'create'])->name('contact-create');
// Route::get('/studentDetails', [StudentController::class,'create'])->name('student-details');