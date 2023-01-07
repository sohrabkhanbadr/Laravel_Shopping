<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Store::create([
            'name' => 'JalalStore',
            'description' => 'Good watch and perfume',
        ]);
        Store::create([
            'name' => 'MahdiLuxStore',
            'description' => 'Luxturious asscessories',
            
        ]);
        Store::create([
            'name' => 'VersachiStore',
            'description' => 'Versachi Brand Store',
            
        ]);
    }
}
