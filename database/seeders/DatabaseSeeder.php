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
        \App\Models\Listing::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        // Listing::factory(6)->create([
        //     'user_id' => $user->id
        // ]);

        // Listing::create([
        // 'title' => 'Laravel Senior Developer',
        // 'tags' => 'laravel, javascript',
        // 'company' => 'Acme Corp',
        // 'location' => 'Boston, MA',
        // 'email' => 'email1@email.com',
        // 'website' => 'https://www.acme.com',
        // 'description' => 'Lorem itself is a pain that will be followed by adipsisic elit. He will criticize the very least and that which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! Expedite from the pursuit is held to be pardoned?'
        // ]);

        // Listing::create([
        // 'title' => 'Full-Stack Engineer',
        // 'tags' => 'laravel, backend, api',
        // 'company' => 'Stark Industries',
        // 'location' => 'New York, NY',
        // 'email' => 'email2@email.com',
        // 'website' => 'https://www.starkindustries.com',
        // 'description' => 'Lorem itself is a pain that will be followed by adipsisic elit. He will criticize the very least and that which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! Expedite from the pursuit is held to be pardoned?'
        // ]);
    }
}