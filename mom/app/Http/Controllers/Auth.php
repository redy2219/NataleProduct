<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ViewAlias;

class Auth extends \Illuminate\Support\Facades\Auth
{
    public static function index(): Factory|ViewAlias|Application
    {
        return view('template.auth');
    }

    public static function authToken($id,$pass): Factory|ViewAlias|Application
    {
     if($id === 'nat' & $pass === 'пароль,который получаю из бд'){
         return view('templates.admin');
     }else {
         return view('templates.auth', $error = 'повторите попытку');
     }
    }
}
