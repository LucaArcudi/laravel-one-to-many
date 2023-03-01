<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'Front-end',
                'color' => '#540099'
            ],
            [
                'name' => 'Back-end',
                'color' => '#007fff'
            ],
            [
                'name' => 'Full-stack',
                'color' => '#b25d72'
            ]
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type['name'];
            $newType->color = $type['color'];
            $newType->save();
        }
    }
}
