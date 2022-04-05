<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect()->route('user.welcome');
        }
        return view('login');
    }

    public function postLogin(LoginRequest $request)
    {
        $validated = $request->validated();
        $user = User::where('email', $validated['email'])->first();

        if(!$user || !Hash::check($validated['password'], $user->password)) {
            return redirect()->route('user.login');
        }

        Auth::login($user, true);
        return redirect()->route('user.welcome');
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

    public function logout(Request $request)
    {
        Auth::logout();
    }
}
