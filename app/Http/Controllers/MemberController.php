<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  

class MemberController extends Controller
{
    //
    public function card()
    {
        $user = auth::User();
        return view('member.card', [
            'user' => $user
        ]);
    }

    public function list()
    {
        $users = DB::table("users")->get();

        return view('member.list', [
            'users' => $users
        ]);
    }
}
