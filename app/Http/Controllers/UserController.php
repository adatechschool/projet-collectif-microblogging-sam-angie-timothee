<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function showProfile(){
        $user = auth()->user();
        return view('users.profile' , compact('user'));
    }

    public function editProfileForm(){
        $user = auth()->user();
        return view('users.edit_profile' , compact('user'));
    }
}
