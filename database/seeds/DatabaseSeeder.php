<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TheaterTableSeeder::class,
            RoomTableSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}
