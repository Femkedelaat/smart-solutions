<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/contact', function () {
//    return view('contact');
//});

//Route::get('/aboutus', function() {
//    return view('aboutus');
//});

Route::get('/home', [PagesController::class, 'home']);
Route::get('/aboutus', [PagesController::class, 'aboutus']);
Route::get('/contact', [PagesController::class, 'contact']);

