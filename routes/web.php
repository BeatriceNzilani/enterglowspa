<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('index');
});




Route::post('/submit-bookings',[BookingController::class, 'store'])->name('bookings.store');