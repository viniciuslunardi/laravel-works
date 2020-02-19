<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
//        $user = new User();
//        $user->name = 'Vinicius';
//        $user->email = 'vinilunardi00@gmail.com';
//        $user->password = Hash::make('1234');
//        $user->save();
//        echo "<h1>User List</h1>";
        $user = User::where("id", 1)->first();
        return view("listUser", [
            "user" => $user
        ]);
    }
}
