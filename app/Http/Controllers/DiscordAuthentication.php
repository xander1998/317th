<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class DiscordAuthentication
{
    public function redirect() {
        return Socialite::driver('discord')->redirect();
    }

    public function callback() {
        $discord = Socialite::driver('discord')->user();

        $user = User::updateOrCreate([
            'discord_id' => $discord->user['id'],
        ], [
            'discord_id' => $discord->user['id'],
            'name' => $discord->name,
            'nickname' => $discord->nickname,
            'email' => $discord->email,
            'avatar' => $discord->avatar,
            'token' => $discord->token,
            'refresh_token' => $discord->refreshToken
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function logout(Request $request): RedirectResponse {
        if (Auth::user()) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }

        return abort(403);
    }
}
