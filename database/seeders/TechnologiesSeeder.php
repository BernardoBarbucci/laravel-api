<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'HTML',
                'description' => 'HyperText Markup Language',
                'version' => '5'
            ],
            [
                'name' => 'CSS',
                'description' => 'Cascading Style Sheets',
                'version' => '3'
            ],
            [
                'name' => 'JavaScript',
                'description' => 'JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions.',
                'version' => 'ES6'
            ],
            [
                'name' => 'Vue.js',
                'description' => 'Vue.js is an open-source model–view–viewmodel JavaScript framework for building user interfaces and single-page applications.',
                'version' => '3'
            ],
            [
                'name' => 'React',
                'description' => 'React (also known as React.js or ReactJS) is a free and open-source front-end JavaScript library for building user interfaces or UI components.',
                'version' => '17'
            ],
            [
                'name' => 'Angular',
                'description' => 'AngularJS is a JavaScript-based open-source front-end web application framework mainly maintained by Google.',
                'version' => '2'
            ],
            [
                'name' => 'PHP',
                'description' => 'Hypertext Preprocessor is a server-side scripting language designed for Web development, but also used as a general-purpose programming language.',
                'version' => '8'
            ],
            [
                'name' => 'Laravel',
                'description' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern.',
                'version' => '8'
            ],
            [
                'name' => 'MySQL',
                'description' => 'MySQL is an open-source relational database management system (RDBMS).',
                'version' => '8'
            ],
            [
                'name' => 'PostgreSQL',
                'description' => 'PostgreSQL, also known as Postgres, is a free and open-source relational database management system (RDBMS) emphasizing extensibility and SQL compliance.',
                'version' => '13'
            ],
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
