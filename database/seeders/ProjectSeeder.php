<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'id' => 1,
                'project_name' => 'Intiflex',
                'client_name' => 'Mr. Daniel'
            ],
            [
                'id' => 2,
                'project_name' => 'Rasio SDM',
                'client_name' => 'Ms. Natalia'
            ],
            [
                'id' => 3,
                'project_name' => 'Deployken',
                'client_name' => '-'
            ],
            [
                'id' => 4,
                'project_name' => 'Bugken',
                'client_name' => '-'
            ],
            [
                'id' => 5,
                'project_name' => 'Project Management',
                'client_name' => '-'
            ]
        ]);
    }
}
