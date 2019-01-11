<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime('NOW');
        DB::table('images')->insert([
            ['name' => 'icona_work_1.jpg','blockname' => 'slider','active' => 1, 'created_at' => $date->format('Y-m-d H:m:s')],
            ['name' => 'icona_work_2.jpg','blockname' => 'slider','active' => 1, 'created_at' => $date->format('Y-m-d H:m:s')],
            ['name' => 'icona_work_3.jpg','blockname' => 'slider','active' => 1, 'created_at' => $date->format('Y-m-d H:m:s')],
            ['name' => 'icona_work_4.jpg','blockname' => 'slider','active' => 1, 'created_at' => $date->format('Y-m-d H:m:s')],
            ['name' => 'icona_work_5.jpg','blockname' => 'slider','active' => 1, 'created_at' => $date->format('Y-m-d H:m:s')],
            ['name' => 'icona_work_6.jpg','blockname' => 'slider','active' => 1, 'created_at' => $date->format('Y-m-d H:m:s')],
            ['name' => 'icona_work_7.jpg','blockname' => 'slider','active' => 1, 'created_at' => $date->format('Y-m-d H:m:s')],
            ['name' => 'icona_work_8.jpg','blockname' => 'slider','active' => 1, 'created_at' => $date->format('Y-m-d H:m:s')]
        ]);
    }
}
