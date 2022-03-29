<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            [
                'id' => 1,
                'project_id' => 1,
                'module_name' => 'Scheduled Ticket',
                'module_code' => '102',
                'price' => 1450000,
                'description' => 'Make a scheduled ticket'
            ],
            [
                'id' => 2,
                'project_id' => 1,
                'module_name' => 'Hose Analytic',
                'module_code' => '103',
                'price' => 1450000,
                'description' => 'Make a hose analytic in dashboard'
            ]
        ]);
    }
}
