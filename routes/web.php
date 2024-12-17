<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalUjianController;
use App\Models\JadwalUjian;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('jadwalujian', JadwalUjianController::class);
