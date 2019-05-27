<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getSocialCallback()
    {
        // 登录成功后将用户重定向到首页
        return redirect('/#/home');
    }

    public function getApp()
    {
    	return view('app');
    }

    public function getWelcome()
    {
    	return view('welcome');
    }
}
