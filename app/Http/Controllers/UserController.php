<?php

namespace App\Http\Controllers;

use App\Services\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function userRole(Role $role){
        return $role->assignRole('admin');
    }
}
