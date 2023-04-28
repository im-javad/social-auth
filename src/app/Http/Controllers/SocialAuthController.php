<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function callbackProvider($driver)
    {
        $user = Socialite::driver($driver)->user();

        Auth::login($this->findOrCreateUser($user, $driver));

        return redirect()->intended()->with('success' , 'You have login successfully');
    }

    private function findOrCreateUser($user , $driver){
        $loginStatus = User::where('email' , $user->email)->first();
        
        if($loginStatus) return $loginStatus;

        $createdUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'driver' => $driver,
        ]);

        return $createdUser;
    }
}
