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
        \App\Models\User::factory(10)->create();
        //\App\Models\Gaem::factory(5)->create();
        \App\Models\Gaem::factory()->create([
            'name' => 'Super Mario Bros 3'
        ]);
        \App\Models\Gaem::factory()->create([
            'name' => 'Portal 2'
        ]);
        \App\Models\Gaem::factory()->create([
            'name' => 'Minecraft'
        ]);

        \App\Models\Record::factory()->create([
            "user_id" => 1,
            "gaem_id" => 1,
            "category" => "any%",
            "time" => 155
        ]);

        \App\Models\Record::factory()->create([
            "user_id" => 2,
            "gaem_id" => 2,
            "category" => "glitch-free",
            "time" => 200
        ]);

        \App\Models\Record::factory()->create([
            "user_id" => 3,
            "gaem_id" => 3,
            "category" => "any%",
            "time" => 129
        ]);
    }
}
