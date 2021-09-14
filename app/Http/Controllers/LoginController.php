<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
  function index(Request $request){
    if ($request->session()->has('USER_LOGIN')) {
  return redirect('dashboard');
    }else {
        return view('login');
    }
    return view('login');
  }
    function adminuth(Request $req){
      $validateData=$req->validate([
     'email' => 'required|email',
     'password'=>'required|min:6|max:8'
      ]);
      $email=$req->post('email');
      $password=$req->post('password');
     $result=User::where(['email'=>$email])->first();
    if ($result) {
    if (Hash::check($req->post('password'),$result->password)) {
      $req->session()->put('USER_LOGIN',true);
      $req->session()->put('USER_ID',$result->id);
      $req->session()->put('USER_EMAIL',$result->email);
      $req->session()->put('USER_NAME',$result->name);
      return redirect('dashboard');
    }else {
      $req->session()->flash('error','Please enter valid password');
      return redirect('/');
    }

  }else {
    $req->session()->flash('error','Please enter valid login details');
    return redirect('/');
  }
}
function dashboard(){
    return view('dashboard');
  }
}
