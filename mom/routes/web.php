<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// magazine home-page
Route::get('/', function () {
    return view('templates.HomeDashboard');
});

Route::get('/product', function () {
    return view('templates.Product');
});
// admin-panel
//Route::get('/admin', function () {
//    $id = '';
//    $pass = '';
//    return Auth::authToken($id, $pass);
//});
