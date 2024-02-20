<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectTechnologies = [
            [
                'project_id' => 1,
                'technology_id' => 1, // HTML
            ],
            [
                'project_id' => 1,
                'technology_id' => 2, // CSS
            ],
            [
                'project_id' => 2,
                'technology_id' => 3, // JavaScript
            ],
            [
                'project_id' => 2,
                'technology_id' => 4, // Vue.js
            ],
            [
                'project_id' => 3,
                'technology_id' => 5, // React
            ],
            [
                'project_id' => 3,
                'technology_id' => 6, // Angular
            ],
            [
                'project_id' => 4,
                'technology_id' => 7, // PHP
            ],
            [
                'project_id' => 4,
                'technology_id' => 8, // Laravel
            ],
            [
                'project_id' => 5,
                'technology_id' => 9, // MySQL
            ],
            [
                'project_id' => 5,
                'technology_id' => 10, // PostgreSQL
            ],
        ];

        DB::table('project_technology')->insert($projectTechnologies);
    }
}
