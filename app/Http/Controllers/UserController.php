<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $req): \Illuminate\Routing\Redirector|string|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $user = User::where(['email'=>$req->email])-> first();
        if (!$user || !Hash::check($req->password, $user->password)){
            return "Username or password is wrong";
        }
        else {
            $req->session()->put('user',$user);
            return redirect('/',);
        }
    }
}
