<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'title' => 'タイトルてすと',
                'body' => 'ボディーてすと',
            ]
        ];
        DB::table('tasks')->insert($param);
    }
}
