<?php

use Illuminate\Database\Seeder;

class TheaterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Theater::class, 2)->create();
    }
}
