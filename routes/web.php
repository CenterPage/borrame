<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;
use App\Mascota;

Route::view('/', 'welcome');

Route::get('/generate', function () {
    $mascotas = Mascota::all();

    $pdf = PDF::loadView('welcome', compact('mascotas'));

    // return $pdf->stream();
    return $pdf->download();
});
