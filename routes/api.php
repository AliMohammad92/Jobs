<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
<<<<<<< HEAD

=======
Route::post('register',[UserController::class,'register']);
Route::post('cheackCode',[UserController::class,'cheackCode']);
Route::post('login',[UserController::class,'login']);


Route::group(['middleware'=>['auth:sanctum']],function (){
    Route::get('logout',[UserController::class,'logout']);
});
>>>>>>> bd87855d075935ca1bbc25d794b2acf764982de7

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'UserController@register');

Route::post('checkCode', 'UserController@checkCode');

Route::get('forgotPassword', 'UserController@sendCode');

Route::post('resetPassword', 'UserController@checkCodeForResetPassword');
