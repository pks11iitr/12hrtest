<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bookings')->delete();
        
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'booking_id' => 1,
                'event_id' => 1,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '08:10:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:02:06',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            1 => 
            array (
                'booking_id' => 2,
                'event_id' => 1,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '08:10:00',
                'booking_date' => '2022-06-20',
                'booked_on' => '2022-06-14 12:07:29',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            2 => 
            array (
                'booking_id' => 3,
                'event_id' => 2,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '11:00:00',
                'booking_date' => '2022-06-20',
                'booked_on' => '2022-06-14 12:07:35',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            3 => 
            array (
                'booking_id' => 4,
                'event_id' => 2,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '11:00:00',
                'booking_date' => '2022-06-20',
                'booked_on' => '2022-06-14 12:07:43',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            4 => 
            array (
                'booking_id' => 5,
                'event_id' => 2,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '11:00:00',
                'booking_date' => '2022-06-20',
                'booked_on' => '2022-06-14 12:07:45',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            5 => 
            array (
                'booking_id' => 6,
                'event_id' => 2,
                'booking_start_time' => '11:10:00',
                'booking_end_time' => '14:10:00',
                'booking_date' => '2022-06-20',
                'booked_on' => '2022-06-14 12:15:09',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            6 => 
            array (
                'booking_id' => 7,
                'event_id' => 2,
                'booking_start_time' => '11:10:00',
                'booking_end_time' => '14:10:00',
                'booking_date' => '2022-06-21',
                'booked_on' => '2022-06-14 12:15:21',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            7 => 
            array (
                'booking_id' => 8,
                'event_id' => 2,
                'booking_start_time' => '11:10:00',
                'booking_end_time' => '14:10:00',
                'booking_date' => '2022-06-21',
                'booked_on' => '2022-06-14 12:15:31',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            8 => 
            array (
                'booking_id' => 9,
                'event_id' => 1,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '08:10:00',
                'booking_date' => '2022-06-15',
                'booked_on' => '2022-06-14 12:16:56',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            9 => 
            array (
                'booking_id' => 10,
                'event_id' => 1,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '08:10:00',
                'booking_date' => '2022-06-15',
                'booked_on' => '2022-06-14 12:17:20',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            10 => 
            array (
                'booking_id' => 11,
                'event_id' => 1,
                'booking_start_time' => '08:15:00',
                'booking_end_time' => '08:25:00',
                'booking_date' => '2022-06-15',
                'booked_on' => '2022-06-14 12:17:35',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            11 => 
            array (
                'booking_id' => 12,
                'event_id' => 1,
                'booking_start_time' => '08:15:00',
                'booking_end_time' => '08:25:00',
                'booking_date' => '2022-06-15',
                'booked_on' => '2022-06-14 12:17:36',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            12 => 
            array (
                'booking_id' => 13,
                'event_id' => 1,
                'booking_start_time' => '08:30:00',
                'booking_end_time' => '08:40:00',
                'booking_date' => '2022-06-15',
                'booked_on' => '2022-06-14 12:17:41',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            13 => 
            array (
                'booking_id' => 14,
                'event_id' => 1,
                'booking_start_time' => '08:30:00',
                'booking_end_time' => '08:40:00',
                'booking_date' => '2022-06-15',
                'booked_on' => '2022-06-14 12:17:43',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            14 => 
            array (
                'booking_id' => 15,
                'event_id' => 1,
                'booking_start_time' => '08:30:00',
                'booking_end_time' => '08:40:00',
                'booking_date' => '2022-06-15',
                'booked_on' => '2022-06-14 12:17:44',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            15 => 
            array (
                'booking_id' => 16,
                'event_id' => 1,
                'booking_start_time' => '14:30:00',
                'booking_end_time' => '14:40:00',
                'booking_date' => '2022-06-15',
                'booked_on' => '2022-06-14 12:25:53',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            16 => 
            array (
                'booking_id' => 17,
                'event_id' => 1,
                'booking_start_time' => '18:30:00',
                'booking_end_time' => '18:40:00',
                'booking_date' => '2022-06-15',
                'booked_on' => '2022-06-14 12:26:09',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            17 => 
            array (
                'booking_id' => 18,
                'event_id' => 1,
                'booking_start_time' => '18:30:00',
                'booking_end_time' => '18:40:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:26:14',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            18 => 
            array (
                'booking_id' => 19,
                'event_id' => 1,
                'booking_start_time' => '18:30:00',
                'booking_end_time' => '18:40:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:26:41',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            19 => 
            array (
                'booking_id' => 20,
                'event_id' => 1,
                'booking_start_time' => '18:30:00',
                'booking_end_time' => '18:40:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:26:43',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            20 => 
            array (
                'booking_id' => 21,
                'event_id' => 1,
                'booking_start_time' => '18:30:00',
                'booking_end_time' => '18:40:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:26:44',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            21 => 
            array (
                'booking_id' => 22,
                'event_id' => 1,
                'booking_start_time' => '18:30:00',
                'booking_end_time' => '18:40:00',
                'booking_date' => '2022-06-21',
                'booked_on' => '2022-06-14 12:26:50',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            22 => 
            array (
                'booking_id' => 23,
                'event_id' => 1,
                'booking_start_time' => '18:30:00',
                'booking_end_time' => '18:40:00',
                'booking_date' => '2022-06-21',
                'booked_on' => '2022-06-14 12:26:52',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            23 => 
            array (
                'booking_id' => 24,
                'event_id' => 1,
                'booking_start_time' => '16:30:00',
                'booking_end_time' => '16:40:00',
                'booking_date' => '2022-06-21',
                'booked_on' => '2022-06-14 12:27:36',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            24 => 
            array (
                'booking_id' => 25,
                'event_id' => 1,
                'booking_start_time' => '16:30:00',
                'booking_end_time' => '16:40:00',
                'booking_date' => '2022-06-21',
                'booked_on' => '2022-06-14 12:27:38',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            25 => 
            array (
                'booking_id' => 26,
                'event_id' => 1,
                'booking_start_time' => '16:15:00',
                'booking_end_time' => '16:25:00',
                'booking_date' => '2022-06-21',
                'booked_on' => '2022-06-14 12:27:43',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            26 => 
            array (
                'booking_id' => 27,
                'event_id' => 1,
                'booking_start_time' => '16:15:00',
                'booking_end_time' => '16:25:00',
                'booking_date' => '2022-06-21',
                'booked_on' => '2022-06-14 12:27:45',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            27 => 
            array (
                'booking_id' => 28,
                'event_id' => 1,
                'booking_start_time' => '16:15:00',
                'booking_end_time' => '16:25:00',
                'booking_date' => '2022-06-20',
                'booked_on' => '2022-06-14 12:27:49',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            28 => 
            array (
                'booking_id' => 29,
                'event_id' => 1,
                'booking_start_time' => '16:15:00',
                'booking_end_time' => '16:25:00',
                'booking_date' => '2022-06-20',
                'booked_on' => '2022-06-14 12:27:50',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            29 => 
            array (
                'booking_id' => 30,
                'event_id' => 1,
                'booking_start_time' => '16:15:00',
                'booking_end_time' => '16:25:00',
                'booking_date' => '2022-06-20',
                'booked_on' => '2022-06-14 12:27:51',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            30 => 
            array (
                'booking_id' => 31,
                'event_id' => 1,
                'booking_start_time' => '16:15:00',
                'booking_end_time' => '16:25:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:28:01',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            31 => 
            array (
                'booking_id' => 32,
                'event_id' => 1,
                'booking_start_time' => '16:15:00',
                'booking_end_time' => '16:25:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:28:02',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            32 => 
            array (
                'booking_id' => 33,
                'event_id' => 2,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '11:00:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:28:28',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            33 => 
            array (
                'booking_id' => 34,
                'event_id' => 2,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '11:00:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:28:32',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            34 => 
            array (
                'booking_id' => 35,
                'event_id' => 2,
                'booking_start_time' => '08:00:00',
                'booking_end_time' => '11:00:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:28:34',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            35 => 
            array (
                'booking_id' => 36,
                'event_id' => 2,
                'booking_start_time' => '11:10:00',
                'booking_end_time' => '14:10:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:28:58',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            36 => 
            array (
                'booking_id' => 37,
                'event_id' => 2,
                'booking_start_time' => '11:10:00',
                'booking_end_time' => '14:10:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:29:01',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            37 => 
            array (
                'booking_id' => 38,
                'event_id' => 2,
                'booking_start_time' => '14:20:00',
                'booking_end_time' => '17:20:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:29:11',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            38 => 
            array (
                'booking_id' => 39,
                'event_id' => 2,
                'booking_start_time' => '14:20:00',
                'booking_end_time' => '17:20:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:29:12',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            39 => 
            array (
                'booking_id' => 40,
                'event_id' => 2,
                'booking_start_time' => '17:30:00',
                'booking_end_time' => '20:30:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:29:27',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            40 => 
            array (
                'booking_id' => 41,
                'event_id' => 2,
                'booking_start_time' => '17:30:00',
                'booking_end_time' => '20:30:00',
                'booking_date' => '2022-06-16',
                'booked_on' => '2022-06-14 12:29:30',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            41 => 
            array (
                'booking_id' => 42,
                'event_id' => 2,
                'booking_start_time' => '17:30:00',
                'booking_end_time' => '20:30:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:29:35',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            42 => 
            array (
                'booking_id' => 43,
                'event_id' => 2,
                'booking_start_time' => '17:30:00',
                'booking_end_time' => '20:30:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:29:37',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            43 => 
            array (
                'booking_id' => 44,
                'event_id' => 2,
                'booking_start_time' => '14:20:00',
                'booking_end_time' => '17:20:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:29:48',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            44 => 
            array (
                'booking_id' => 45,
                'event_id' => 2,
                'booking_start_time' => '14:20:00',
                'booking_end_time' => '17:20:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:29:49',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            45 => 
            array (
                'booking_id' => 46,
                'event_id' => 2,
                'booking_start_time' => '11:10:00',
                'booking_end_time' => '14:10:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:29:55',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            46 => 
            array (
                'booking_id' => 47,
                'event_id' => 2,
                'booking_start_time' => '11:10:00',
                'booking_end_time' => '14:10:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:29:56',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
            47 => 
            array (
                'booking_id' => 48,
                'event_id' => 2,
                'booking_start_time' => '11:10:00',
                'booking_end_time' => '14:10:00',
                'booking_date' => '2022-06-19',
                'booked_on' => '2022-06-14 12:29:58',
                'customer_email' => 'pks11iitr@gmail.com',
                'customer_first_name' => 'pankaj',
                'customer_last_name' => 'sengar',
            ),
        ));
        
        
    }
}