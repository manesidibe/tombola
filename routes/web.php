<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Route pour afficher le formulaire d'inscription
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route pour gérer l'envoi du formulaire d'inscription
Route::post('/register', [RegisterController::class, 'register']);

// Route pour afficher le formulaire de connexion
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route pour gérer l'envoi du formulaire de connexion
Route::post('/login', [LoginController::class, 'login']);

// Route pour gérer la déconnexion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route pour le tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Route par défaut (redirection vers la page de login)
Route::redirect('/', '/login');

?>
