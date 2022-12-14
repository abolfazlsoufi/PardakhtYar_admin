<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Faker\Calculator\Iban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Permission;

class UserController extends Controller
{

    public function __construct()
    {
        //
    }

    public function view()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name         = $request->name;
        $user->username     = $request->username;
        $user->password     = $request->password;
        $user->email        = $request->email;
        $user->phone        = $request->phone;
        $user->api_token    = Hash::make($request->api_token);

        $user->save();
        $user->roles()->attach(1); // user_id = 10 | role_id = 1
        return response()->json($user);
    }

}
