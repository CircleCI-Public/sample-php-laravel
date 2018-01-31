<?php


use App\User;
use Illuminate\Support\Facades\Hash;

class UserTest1 extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testRegister()
    {
        $email = 'pp@example.com';
        $password = Hash::make('password');

        User::register(['email' => $email, 'password' => $password]);

        $this->tester->seeRecord('users', ['email' => $email, 'password' => $password]);
    }

}
