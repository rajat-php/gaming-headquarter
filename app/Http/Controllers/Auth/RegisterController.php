<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Socialite, Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Login with Google.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * handle google callback function
     */
    public function googleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->getEmail())->first();
            if ($user) {
                Auth::loginUsingId($user->id);
            }
            else{
                $user = User::create([
                    'name'              => $googleUser->name,
                    'email'             => $googleUser->email,
                    'provider'          => 'google',
                    'provider_id'       => $googleUser->id,
                    'profile_picture'   => $googleUser->avatar,
                    'password'          => Hash::make('12345678'),
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);

                Auth::loginUsingId($user->id);
            }       

        } catch (\Exception $e) {
            return redirect()->route('login')->with('errormessage', 'Login failed, please try again');
        }

        return redirect()->route('home');
    }

    /**
     * Login with Facebook.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * handle facebook callback function
     */
    public function facebookCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->user();
            //echo "<pre>"; print_r($facebookUser); die;
            $user = User::where('email', $facebookUser->getEmail())->first();

            if ($user) {
                Auth::loginUsingId($user->id);
            }
            else{
                $user = User::create([
                    'name'              => $facebookUser->name,
                    'email'             => $facebookUser->email,
                    'provider'          => 'facebook',
                    'provider_id'       => $facebookUser->id,
                    'profile_picture'   => $facebookUser->avatar,
                    'password'          => Hash::make('12345678'),
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);

                Auth::loginUsingId($user->id);
            }       

        } catch (\Exception $e) {
            return redirect()->route('login')->with('errormessage', 'Login failed, please try again');
        }

        return redirect()->route('home');
    }
}
