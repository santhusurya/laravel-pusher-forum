<?php

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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hash-password', function (Request $request) {
    if (isset($request->password) && !empty($request->password)) {
        return response()->json(['Hashed Password' => Hash::make($request->password)]);
    } else {
        return response()->json(['error' => "Please set 'password' URL Query Parameter with your choose password"], Response::HTTP_BAD_REQUEST);
    }
});
