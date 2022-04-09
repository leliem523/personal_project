<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect()->route('user.home');
        }
        return view('pages/Site/login');
    }

    public function postLogin(LoginRequest $request)
    {
        $validated = $request->validated();
        $user = User::where('email', $validated['email'])->first();

        if(!$user || !Hash::check($validated['password'], $user->password)) {
            return redirect()->route('user.login');
        }

        Auth::login($user, true);
        return redirect()->route('user.home');
    }

    public function register()
    {
        return view('register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::where('email', $validated['email'])->first();

        if($user) {
            return redirect()->route('user.login');
        }
        $user = new User;

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password =Hash::make($validated['password']);

        $user->save();

        Auth::login($user, true);

        return redirect()->route('user.welcome');

    }

    public function loginWithGoogleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        dd($user);
    }
    public function loginWithFacebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        dd($user);
    }

    public function loginWithFacebook()
    {
        # code...
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return back();
    }
}
