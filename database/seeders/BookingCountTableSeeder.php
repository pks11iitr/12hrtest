<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingCountTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('booking_count')->delete();
        
        \DB::table('booking_count')->insert(array (
            0 => 
            array (
                'count_id' => 3,
                'date_time' => '2022-06-16 08:00:00',
                'event_id' => 1,
                'count' => 3,
            ),
            1 => 
            array (
                'count_id' => 12,
                'date_time' => '2022-06-20 08:00:00',
                'event_id' => 1,
                'count' => 1,
            ),
            2 => 
            array (
                'count_id' => 13,
                'date_time' => '2022-06-20 08:00:00',
                'event_id' => 2,
                'count' => 3,
            ),
            3 => 
            array (
                'count_id' => 17,
                'date_time' => '2022-06-20 11:10:00',
                'event_id' => 2,
                'count' => 1,
            ),
            4 => 
            array (
                'count_id' => 18,
                'date_time' => '2022-06-21 11:10:00',
                'event_id' => 2,
                'count' => 2,
            ),
            5 => 
            array (
                'count_id' => 20,
                'date_time' => '2022-06-15 08:00:00',
                'event_id' => 1,
                'count' => 2,
            ),
            6 => 
            array (
                'count_id' => 23,
                'date_time' => '2022-06-15 08:15:00',
                'event_id' => 1,
                'count' => 2,
            ),
            7 => 
            array (
                'count_id' => 25,
                'date_time' => '2022-06-15 08:30:00',
                'event_id' => 1,
                'count' => 3,
            ),
            8 => 
            array (
                'count_id' => 29,
                'date_time' => '2022-06-15 14:30:00',
                'event_id' => 1,
                'count' => 1,
            ),
            9 => 
            array (
                'count_id' => 30,
                'date_time' => '2022-06-15 18:30:00',
                'event_id' => 1,
                'count' => 1,
            ),
            10 => 
            array (
                'count_id' => 31,
                'date_time' => '2022-06-16 18:30:00',
                'event_id' => 1,
                'count' => 1,
            ),
            11 => 
            array (
                'count_id' => 32,
                'date_time' => '2022-06-19 18:30:00',
                'event_id' => 1,
                'count' => 3,
            ),
            12 => 
            array (
                'count_id' => 36,
                'date_time' => '2022-06-21 18:30:00',
                'event_id' => 1,
                'count' => 2,
            ),
            13 => 
            array (
                'count_id' => 38,
                'date_time' => '2022-06-21 16:30:00',
                'event_id' => 1,
                'count' => 2,
            ),
            14 => 
            array (
                'count_id' => 40,
                'date_time' => '2022-06-21 16:15:00',
                'event_id' => 1,
                'count' => 2,
            ),
            15 => 
            array (
                'count_id' => 42,
                'date_time' => '2022-06-20 16:15:00',
                'event_id' => 1,
                'count' => 3,
            ),
            16 => 
            array (
                'count_id' => 45,
                'date_time' => '2022-06-19 16:15:00',
                'event_id' => 1,
                'count' => 2,
            ),
            17 => 
            array (
                'count_id' => 47,
                'date_time' => '2022-06-16 08:00:00',
                'event_id' => 2,
                'count' => 3,
            ),
            18 => 
            array (
                'count_id' => 51,
                'date_time' => '2022-06-16 11:10:00',
                'event_id' => 2,
                'count' => 2,
            ),
            19 => 
            array (
                'count_id' => 53,
                'date_time' => '2022-06-16 14:20:00',
                'event_id' => 2,
                'count' => 2,
            ),
            20 => 
            array (
                'count_id' => 55,
                'date_time' => '2022-06-16 17:30:00',
                'event_id' => 2,
                'count' => 2,
            ),
            21 => 
            array (
                'count_id' => 57,
                'date_time' => '2022-06-19 17:30:00',
                'event_id' => 2,
                'count' => 2,
            ),
            22 => 
            array (
                'count_id' => 59,
                'date_time' => '2022-06-19 14:20:00',
                'event_id' => 2,
                'count' => 2,
            ),
            23 => 
            array (
                'count_id' => 61,
                'date_time' => '2022-06-19 11:10:00',
                'event_id' => 2,
                'count' => 3,
            ),
        ));
        
        
    }
}