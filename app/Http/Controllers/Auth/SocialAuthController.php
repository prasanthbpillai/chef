<?php

namespace App\Http\Controllers\Auth;

use App\Services\SocialAccountService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;

class SocialAuthController extends Controller
{
    //
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service)
    {
        // when facebook call us a with token

     //   $providerUser = \Socialite::driver('facebook')->user();
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/home');

    }
}
