<?php

namespace Aham\Http\Controllers\V2\AdminDB;

use Aham\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class HomeController extends Controller
{
    public function home()
    {
        $user = Sentinel::getUser();
        $token = JWTAuth::fromUser($user);

        return view('admin-db.index', compact('user', 'token'));
    }
}
