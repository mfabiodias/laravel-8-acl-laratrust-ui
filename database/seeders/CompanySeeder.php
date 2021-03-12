<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'id'     => 1, 
                'name'   => 'W Techonology', 
                'description' => 'W Techonology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'     => 2, 
                'name'   => 'FullTime', 
                'description' => 'FullTime Soluções',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
