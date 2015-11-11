<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

<<<<<<< HEAD
        $this->call(BooksTableSeeder::class);
=======
        // $this->call(UserTableSeeder::class);
>>>>>>> d41cee8023a599d2f91965b53fb83fdc075c829b

        Model::reguard();
    }
}
