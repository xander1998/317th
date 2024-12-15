<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\DiscordAuthentication;
use App\Http\Controllers\ModsController;

// Base Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/mods', function () {
    return view('mods');
});

Route::get('/mods', [ModsController::class, 'fetch']);

// OAuth Routes
Route::prefix('auth')->group(function () {
    Route::get('discord/redirect', [DiscordAuthentication::class, 'redirect']);
    Route::get('discord/callback', [DiscordAuthentication::class, 'callback']);
    Route::get('discord/logout', [DiscordAuthentication::class, 'logout']);
});
