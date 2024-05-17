<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Accueil');
});

Route::get('/connexion', function () {
    return view('Connexion');
});

Route::get('/inscription', function () {
    return view('Inscription');
});
Route::get('/Reservation', function () {
    return view('Reservation');
});
Route::get('/reservation', [ReservationController::class, 'show'])->name('reservation.show');

Route::post('/ajouter', [UtilisateurController::class, 'NewUtilisateur']);

// Route::get('/', function () {
//     return view('Logement');
// });

// Route::get('/', function () {
//     return view('Reservation');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
