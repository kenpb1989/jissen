<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '森永',
            'mail' => 'm@m',
            'age' => 40,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => '今井',
            'mail' => 'i@i',
            'age' => 30,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => '小林',
            'mail' => 'k@k',
            'age' => 35,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => '牧川',
            'mail' => 'm@m',
            'age' => 35,
        ];
        DB::table('people')->insert($param);
    }
}
