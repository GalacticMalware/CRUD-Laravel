<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [User::class, 'index'])->name('Users');
Route::post('/store', [User::class, 'store'])->name("addUser");
Route::post('/update/{id}', [User::class, 'update'])->name("editUser");
