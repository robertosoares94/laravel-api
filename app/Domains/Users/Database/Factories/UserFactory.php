<?php
namespace App\Domains\Users\Database\Factories;
use App\Domains\Users\User;
use App\Support\Database\ModelFactory;

class UserFactory extends ModelFactory
{
    protected $model = User::class;
    protected function fields()
    {
        static $password;
        return [
            'name' => $this->faker->name,
            'email' =>  $this->faker->unique()->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
}