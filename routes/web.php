<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::get('/login', function () {
    $user = new User;
    $user->name = "Susan Pandey";
    $user->email = "xantosh121@gmail.com";
    $user->address = "Haraiya";
    $user->password = "12345";
    $user->phone = "12345";
    $user->save();
});
