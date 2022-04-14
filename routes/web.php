<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\GarageController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/login', function () {
    return view('auth\login');
})->name('login');

Route::get('/register', function () {
    return view('auth\register');
})->name('register');

Route::get('/book_service', [ConsumerController::class, 'bookservice']);

Route::post('/upload_booking', [ConsumerController::class, 'upload']);

Route::post('/my_services_request', [ConsumerController::class, 'servicerequest']);

Route::get('/offers', [GarageController::class, 'offers']);

Route::post('/upload_offer', [GarageController::class, 'upload']);

Route::post('/my_offers_request', [GarageController::class, 'offerrequest']);

Route::get('/accepted/{id}', [GarageController::class, 'accepted']);

Route::get('/declined/{id}', [GarageController::class, 'declined']);

Route::get('/done/{id}', [GarageController::class, 'done']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
