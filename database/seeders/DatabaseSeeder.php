<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
       // \App\Models\User::factory(5)->create();
       
       $user =  User::factory()->create([
            'name' => 'john doe',
            'email' => 'johndoe@gmail.com'
        ]);

        Listing::factory(5)->create([
            'user_id' => $user->id
        ]);
/*
        Listing::create([
            'title' => 'Laravel senior developer',
            'tags' => 'laravel,javascript',
            'company' => 'Acme corp',
            'location' => 'Nigeria,abuja',
            'email' => 'email@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ab rem consectetur non aliquam similique consequatur 
            repudiandae voluptates odit officiis eum!',
        ]);
        
        Listing::create([
            'title' => 'Laravel developer',
            'tags' => 'laravel,java',
            'company' => 'goon tech',
            'location' => 'Nigeria,lagos',
            'email' => 'email@email.com',
            'website' => 'https://www.goon.com',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ab rem consectetur non aliquam similique consequatur 
            repudiandae voluptates odit officiis eum!',
        ]); */

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
