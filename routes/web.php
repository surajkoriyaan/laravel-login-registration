<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class,'index']);
Route::get('register',function(){
   return view('register');
});
Route::post('register',[RegistrationController::class,'index'])->name('register');
Route::post('login',[LoginController::class,'adminuth'])->name('login');

Route::group(['middleware'=>'admin_auth'],function(){
Route::get('dashboard',[LoginController::class,'dashboard'])->name('dashboard');
  Route::get('logout', function () {
    session()->forget('USER_LOGIN');
    session()->forget('USER_EMAIL');
    session()->flash('error','Logout Successfull');
    return redirect('/');
  });


});
