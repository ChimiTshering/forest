<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\response;

class UserController extends Controller
{
    public function Query()
    {

        $users = DB::table('users')->get();

        return view('Query', ['users' => $users]);


    }
}
