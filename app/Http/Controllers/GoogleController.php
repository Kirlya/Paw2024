<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback() {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if ( $finduser ) {
            Auth::login($finduser);
            return redirect()->intended('home');
            } else {
                $user = User::updateOrCreate([
                'google_id' => $user->id,
            ], [
                'name' => $user->name,
                'email' => $user->email,
                'password'=> encrypt('12345678'),
            ]);
         
            Auth::login($user);
         
            return redirect()->intended('home');
            }
        
       }
}
