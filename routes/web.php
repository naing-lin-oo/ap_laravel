<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function() {
//     $data = [
//         'home_key' => 'home_value',
//     ];
//     return view('home', compact('data'));
// });

Route::resource('posts', HomeController::class);

// Route::get('contact', function() {
//     $data = [
//         'contact_key' => 'contact_value',
//     ];
//     return view('contact', compact('data'));
// });

// Route::get('about', function() {
//     $data = [
//         'about_key' => 'about_value',
//     ];
//     return view('about', compact('data'));
// });
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [HomeController::class, 'index']);


