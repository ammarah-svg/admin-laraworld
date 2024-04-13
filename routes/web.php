<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dash', 'Dashboard');
Route::view('/users','Users');
Route::view('/products', 'Products');
Route::view('/transactions', 'Transactions');
Route::view('/revenue', 'Revenue');
Route::view('/reports','Reports');
Route::view('/teams', 'Teams');
Route::view('/settings', 'Settings');
Route::view('/help','Help');
Route::view('/logout', 'Logout');



Route::post('/add-user', [UserController::class, 'addUser']);
