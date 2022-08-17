<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function __construct()
    {
        //
    }

    public function view()
    {
        $role = Role::all();
        return response()->json($role);
    }

    public function create(Request $request)
    {
        $role = new Role();
        $role->entity = $request->entity;

        $role->save();
        $role->permission()->attach(1);

        return response()->json($role);
    }

    public function update(Request $request,$id)
    {
        $role = Role::find($id);
        $role->entity = $request->entity;

        $role->save();
        $role->permission()->attach(1);
        $role->permission()->attach(2);
        $role->permission()->attach(2);

        return response()->json($role);
    }
}
