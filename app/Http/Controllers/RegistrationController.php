<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    function index(Request $req){
     $validateData=$req->validate([
    'name'=>'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
    'email' => 'required|email|unique:users,email',
    'password'=>'required|min:6|max:8'
     ]);

     $data=new User;
     $data->name=$req->name;
     $data->email=$req->email;
     $data->password=Hash::make($req->password);
     $d=$data->save();
     $req->session()->flash('user',$d);
     return redirect('register');
    }
}
