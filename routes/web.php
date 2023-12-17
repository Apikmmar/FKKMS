<?php

use App\Http\Controllers\ManageUserController;
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

// Show login form
Route::get('/login', [ManageUserController::class, 'showLoginForm'])->name('login');

// Handle login form submission
Route::post('/login', [ManageUserController::class, 'login'])->name('login.submit');

// create new user
Route::get('/register', [ManageUserController::class, 'create']);
Route::post('/register', [ManageUserController::class, 'createNewUser']);