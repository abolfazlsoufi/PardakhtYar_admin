<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User_Role extends Model
{
    protected $table    = 'user_role';
    protected $hidden   = [];

    public function users()
    {
        return $this->belongsToMany(User::class,'users');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'roles');
    }
}
