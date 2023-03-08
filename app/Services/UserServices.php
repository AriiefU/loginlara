<?php
namespace App\Service;

use App\Services\UserService;

class UserServiceImpl implements UserService
{
    private array $users = [
        "Demon" => "God"
    ];

    function login(string $user, string $password): bool
    {
        if(!isset($this->users[$user])){
            return false;
        }

        $correctPassword = $this->users[$user];
        return $password == $correctPassword;
    }
}