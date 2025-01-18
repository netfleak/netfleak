<?php

namespace App\Http\Controllers;

use Quagga\Quagga\Foundation\Auth\AuthenticatesUsers;
use Slim\Psr7\Request;

class LoginController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;


    /**
     * Setting redirect URL after login successful
     *
     * @return string
     */
    public function redirectTo()
    {
        return '/';
    }
}
