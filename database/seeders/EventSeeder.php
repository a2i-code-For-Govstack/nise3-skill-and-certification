<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Events database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('events')->truncate();

        DB::table('events')->insert(array(
            0 => array(
                'id' => 1,
                'institute_id' => 1,
                'caption' => 'Technology Seminar',
                'image' => '',
                'date' => Carbon::now()->addDays(5),
                'details' => 'A seminar on the latest technologies in the industry.',
                'created_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            1 => array(
                'id' => 2,
                'institute_id' => 2,
                'caption' => 'Annual Meet-up',
                'image' => '',
                'date' => Carbon::now()->addDays(10),
                'details' => 'Annual meet-up to discuss growth and future plans.',
                'created_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            2 => array(
                'id' => 3,
                'institute_id' => 1,
                'caption' => 'Workshop on AI',
                'image' => '',
                'date' => Carbon::now()->addDays(15),
                'details' => 'A comprehensive workshop on Artificial Intelligence.',
                'created_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ));

        Schema::enableForeignKeyConstraints();
    }
}
