<?php


namespace App\Http\Controllers;


use Product;

class View extends Controller
{
    public static function upDatabase()
    {
        $obj = new Product();
        if (isset($obj)) {
            return $obj->up();
        }
        else {
            return '<div>error</div>';
        }


    }
}
