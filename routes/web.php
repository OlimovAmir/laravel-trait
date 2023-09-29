<?php

use App\Http\Controllers\PageController;
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
    return view('layout.base');
});
Route::get('home', [PageController::class, 'PageHome']);
Route::get('about', [PageController::class, 'PageAbout']);
Route::get('contact', [PageController::class, 'PageContact']);