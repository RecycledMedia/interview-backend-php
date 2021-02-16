<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('items')->insert([
            'id' => 1,
            'name' => 'Pear - Halves',
            'description' => 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.
Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.',
            'images' => '[{"url":"http://dummyimage.com/185x132.jpg/ff4444/ffffff"},{"url":"http://dummyimage.com/163x244.jpg/cc0000/ffffff"},{"url":"http://dummyimage.com/112x119.jpg/dddddd/000000"},{"url":"http://dummyimage.com/164x194.bmp/cc0000/ffffff"},{"url":"http://dummyimage.com/226x163.jpg/ff4444/ffffff"}]',
            'seller_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 2,
            'name' => 'Soup - Campbells, Classic Chix',
            'description' => 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.',
            'images' => '[{"url":"http://dummyimage.com/142x122.png/5fa2dd/ffffff"},{"url":"http://dummyimage.com/189x185.jpg/cc0000/ffffff"}]',
            'seller_id' => 2
        ]);

        DB::table('items')->insert([
            'id' => 3,
            'name' => 'Sauce - Salsa',
            'description' => 'Fusce consequat. Nulla nisl. Nunc nisl.

Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.',
            'images' => '[{"url":"http://dummyimage.com/112x244.jpg/5fa2dd/ffffff"},{"url":"http://dummyimage.com/245x203.jpg/cc0000/ffffff"},{"url":"http://dummyimage.com/165x176.bmp/5fa2dd/ffffff"}]',
            'seller_id' => 3
        ]);

        DB::table('items')->insert([
            'id' => 4,
            'name' => 'Nut - Peanut, Roasted',
            'description' => 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.',
            'images' =>  '[{"url":"http://dummyimage.com/150x196.bmp/5fa2dd/ffffff"}]',
            'seller_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 5,
            'name' => 'Nut - Peanut, Roasted',
            'description' => 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.',
            'images' =>  '[{"url":"http://dummyimage.com/150x196.bmp/5fa2dd/ffffff"}]',
            'seller_id' => 3
        ]);

    }
}
