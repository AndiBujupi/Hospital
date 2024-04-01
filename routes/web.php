<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::get('/home',[HomeController::class,'redirect']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashbord', function () {
        return view('dashboard');
    })->name('dashboard');
});
