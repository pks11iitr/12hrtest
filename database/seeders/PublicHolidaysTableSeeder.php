<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublicHolidaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('public_holidays')->delete();
        
        \DB::table('public_holidays')->insert(array (
            0 => 
            array (
                'holiday_id' => 1,
                'date' => '2022-06-17',
                'holiday_name' => 'Whit Monday',
            ),
            1 => 
            array (
                'holiday_id' => 2,
                'date' => '2022-06-30',
                'holiday_name' => 'German Unity Day',
            ),
            2 => 
            array (
                'holiday_id' => 3,
                'date' => '2022-06-25',
                'holiday_name' => 'Christmas Day',
            ),
            3 => 
            array (
                'holiday_id' => 4,
                'date' => '2022-06-26',
                'holiday_name' => '2nd Day of Christmas',
            ),
        ));
        
        
    }
}