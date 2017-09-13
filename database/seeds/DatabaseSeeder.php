<?php

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
        factory(App\Rooms::class, 50)->create();
        factory(App\Doctors::class, 50)->create();
    }
}
