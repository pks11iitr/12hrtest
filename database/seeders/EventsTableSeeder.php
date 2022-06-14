<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'event_id' => 1,
                'name' => 'Hair Cut',
                'session_duration' => 10,
                'break_duration' => 5,
                'max_bookings' => 3,
                'future_days' => 7,
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
            ),
            1 => 
            array (
                'event_id' => 2,
                'name' => 'Hair Color',
                'session_duration' => 180,
                'break_duration' => 10,
                'max_bookings' => 3,
                'future_days' => 7,
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
            ),
        ));
        
        
    }
}