<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

class UserTest extends BaseTestCase
{
    protected $tester;

    public function testRegister()
    {
        $email = 'johndoe@example.com';
        $password = Hash::make('password');

        User::register(['email' => $email, 'password' => $password]);

        $this->tester->seeRecord('users', ['email' => $email, 'password' => $password]);
    }

}