<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventHolidaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_holidays')->delete();
        
        \DB::table('event_holidays')->insert(array (
            0 => 
            array (
                'id' => 1,
                'event_id' => 1,
                'holiday_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'event_id' => 1,
                'holiday_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'event_id' => 1,
                'holiday_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'event_id' => 1,
                'holiday_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'event_id' => 2,
                'holiday_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'event_id' => 2,
                'holiday_id' => 2,
            ),
        ));
        
        
    }
}