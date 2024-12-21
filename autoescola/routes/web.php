<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// * Views Autoescola

// Rota por GET para a tela home
Route::get('/', function () {
    return view('autoescola/home');
});

// Rota por GET para tela sobre nós
Route::get('/sobre-nos', function () {
    return view('autoescola/about_us');
});

// Rota por GET para tela serviços
Route::get('/services', function () {
    return view('autoescola/services');
});

// Rota por GET para tela de políticas de privacidade
Route::get('/politicas-de-privacidade', function () {
    return view('autoescola/politica');
});

//Rota para o Fale Conosco
//Rotas para o envio de email
Route::post('/contact/send', [ContactController::class, 'sendMessage'])->name('contact.sendMessage');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.sendMessage');

