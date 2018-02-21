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
        // $this->call(UsersTableSeeder::class);
        //factory(App\User::class,50)->create();
        factory(App\Product::class,30)->create();
        //factory(App\Admin::class,10)->create();
        factory(App\Review::class,60)->create();
    }
}
