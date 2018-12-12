<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $cantidadusuarios = 20000;
        factory(User::class, $cantidadusuarios)->create();
    }
}
