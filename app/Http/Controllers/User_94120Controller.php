<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\user_94120;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class User_94120Controller extends Controller
{
    public function register(Request $req)
    {
        $validatedData = $req->validate([
        'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|unique:user_94120',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',

        ]);
        

        $firstname = $req['firstname'];
        $lastname = $req['lastname'];
        $email = $req['email'];
        $password = $req['password'];

        $user_94120 = new user_94120;
        $user_94120->firstname =$firstname;
        $user_94120->lastname = $lastname;
        $user_94120->email = $email;
        $user_94120->password = Hash::make($password);
        $user_94120->save();

        return $user_94120->toJson();
    }

    public function login(Request $req)
    {
        
        $email=$req['email'];
        $password=$req['password'];

        $user_94120 = user_94120::where('email',$email)->firstOrFail();

        if(Hash::check($password, $user_94120->password))
        {
            return $user_94120->toJson();
        }
        return null;
    }

    public function showUsers(Request $req)
    {
        $data = user_94120::all();

        return $data->toJson();
    }
}
