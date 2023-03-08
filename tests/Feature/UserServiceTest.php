<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private UserService $userService;

    protected function setUp():void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserService::class);
    }

    public function testLoginSucces()
    {
       self::assertTrue($this->userService->login("Demon" , "God"));
    }

    public function testLoginNotFound()
    {
       self::assertFalse($this->userService->login("King" , "Lord"));
    }

    public function testLoginWrongPassword()
    {
       self::assertFalse($this->userService->login("Demon" , "Lord"));
    }
}
