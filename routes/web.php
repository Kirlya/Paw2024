<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\AlumnoController;

use App\Http\Controllers\Auth\GoogleController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/nueva_ruta', [FrontController::class,'nuevaRuta']);

Route::get('/alumnos', [AlumnoController::class, 'index']);
// diapositiva
Route::get('/login/google', [App\Http\Controllers\GoogleController::class,'redirect'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\GoogleController::class,'callback'])->name('login.google.callback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
Route::get('/login/google',function (){
    return Socialite::driver('google')->redirect();
});

Route::get('/login/google/callback', function (){
    $googleUser = Socialite::driver('google')->user();

    $user = User::updateOrCreate([
        'google_id' => $googleUser->id
    ],[
        'name' => $googleUser->name,
        'email' => $googleUser->email,
        'google_token' => $googleUser->token,
        'google_refresh_token' => $googleUser->refreshToken,
    ]);

    Auth::login($user);
    
    return redirect('/dashboard');
});*/