<?php

namespace App\Http\Controllers\Form;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();
        return view("listAllUsers", [
            "users" => $users
        ]);
    }

    public function listUser(User $user)
    {
        return view("listUser", [
            "user" => $user
        ]);
    }
}
