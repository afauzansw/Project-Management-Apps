<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                'id' => 1,
                'module_id' => 1,
                'name' => 'Create Scheduled Ticket',
                'is_done' => true,
                'description' => 'Make a scheduled ticket'
            ],
            [
                'id' => 2,
                'module_id' => 1,
                'name' => 'Notify to Admin',
                'is_done' => false,
                'description' => 'Notify to admin when ticket will enter execution date'
            ],
            [
                'id' => 3,
                'module_id' => 2,
                'name' => 'Analytic Week to Week',
                'is_done' => false,
                'description' => 'Get analytic week to week'
            ]
        ]);
    }
}
