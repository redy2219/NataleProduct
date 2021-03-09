<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Auth extends Controller
{
    public static function index(): Factory|View|Application
    {
        return view('template.auth');
    }

    public static function authToken($id,$pass): Factory|View|Application
    {
     if($id === 'nat' & $pass === 'пароль,который получаю из бд'){
         return view('templates.admin');
     }else {
         return view('templates.auth', $error = 'повторите попытку');
     }
    }
}
