<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function findUserByAccountAndPassword(string $account, string $password): ?User
    {
        // ...
    }
}
