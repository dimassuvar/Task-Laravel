<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\santriController;
use App\Http\Controllers\mahasantriController;
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

Route::get('/salam', function () {
    return " Assalamualaikum, Selamat Belajar Laravel PeTIK Jombang Angkatan III";
});

//routing parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//routing view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

//routing view Data Santri
Route::get('/santri', [SantriController::class, 'dataSantri']
);

//routing view Data mahaSantri
Route::get('/mahasantri', [mahasantriController::class, 'dataMahasantri']
);