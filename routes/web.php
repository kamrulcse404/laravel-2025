<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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
    return "Hello Farjana";

});

// Route::get('/{id}', function ($id) {
    // return view('welcome');
    // return "Hello Farjana";

//     return $id;
// });

// Route::resource('/users', UserController::class);
// Route::resource('/users', UserController::class)->only('index');
Route::resource('/users', UserController::class)->except('index', 'show');

Route::get('/home', HomePageController::class);

Route::get('/test', [TestController::class, 'test']);
