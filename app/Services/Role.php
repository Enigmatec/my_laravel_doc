<?php

namespace App\Services;

class Role {

    private $name;
    public function __construct($name, User $user){
        $this->name = $name;
    }

    public function assignRole($role){
        return [
            'role' => $role,
            'name' => $this->name
        ];
    }
}
