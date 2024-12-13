<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\DiscordAuthentication;

// Base Routes
Route::get('/', function () {
    return view('welcome');
});

// OAuth Routes
Route::prefix('auth')->group(function () {
    Route::get('discord/redirect', [DiscordAuthentication::class, 'redirect']);
    Route::get('discord/callback', [DiscordAuthentication::class, 'callback']);
    Route::get('discord/logout', [DiscordAuthentication::class, 'logout']);
});
