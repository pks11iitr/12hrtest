<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BreakTimingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('break_timings')->delete();
        
        \DB::table('break_timings')->insert(array (
            0 => 
            array (
                'break_id' => 1,
                'title' => 'Lunch Break',
                'break_start_time' => '12:00:00',
                'break_end_time' => '13:00:00',
                'event_id' => 1,
            ),
            1 => 
            array (
                'break_id' => 2,
                'title' => 'Cleaning Break',
                'break_start_time' => '15:00:00',
                'break_end_time' => '16:00:00',
                'event_id' => 1,
            ),
        ));
        
        
    }
}