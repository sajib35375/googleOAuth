<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        $users = User::all();
        return view('dashboard',compact('users'));
    }

    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleOauth ()
    {
        try {

            $user = Socialite::driver('google')->user();
            $findUser = User::where('email',$user->email)->first();

            if (!$findUser) {
                $findUser = new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->image = $user->avatar;
                $findUser->password = Hash::make($user->name);
                $findUser->created_at = Carbon::now();
                $findUser->save();
            }

            Auth::login($findUser);

            return redirect()->route('dashboard');

        } catch (Exception $e){
            dd($e->getMessage());
        }
    }



    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
