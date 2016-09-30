<?php

use App\Domains\Users\User;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(30)->create();
    }
}