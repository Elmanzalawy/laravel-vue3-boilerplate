<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginWithGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogleCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::firstOrCreate([
            'email' => $googleUser->email,
        ], [
            'name' => $googleUser->name,
            'password' => Hash::make(Str::random(24)),
            'avatar' => $googleUser->avatar,
        ]);


        Auth::login($user);

        return view('index')->with('user', $user);
    }

    public function logout()
    {
        Auth::logout();
    }
}
