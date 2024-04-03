<?php

namespace Database\Seeders;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            array('title' => 'Andhra Pradesh','country_id' => '1'),
            array('title' => 'Arunachal Pradesh','country_id' => '1'),
            array('title' => 'Telangana','country_id' => '1'),
            array('title' => 'Assam','country_id' => '1'),
            array('title' => 'Bihar','country_id' => '1'),
            array('title' => 'Uttar Pradesh','country_id' => '1'),
            array('title' => 'Gujarat','country_id' => '1'),
            array('title' => 'Goa','country_id' => '1'),
            array('title' => 'Haryana','country_id' => '1'),
            array('title' => 'Himachal Pradesh','country_id' => '1'),
            array('title' => 'Jammu and Kashmir','country_id' => '1'),
            array('title' => 'Madhya Pradesh','country_id' => '1'),
            array('title' => 'Karnataka','country_id' => '1'),
            array('title' => 'Kerala','country_id' => '1'),
            array('title' => 'Maharashtra','country_id' => '1'),
            array('title' => 'Chattisgarh','country_id' => '1'),
            array('title' => 'Delhi','country_id' => '1'),
            array('title' => 'Daman and Diu','country_id' => '1'),
            array('title' => 'Dadra and Nagar Hav.','country_id' => '1'),
            array('title' => 'Manipur','country_id' => '1'),
            array('title' => 'Megalaya','country_id' => '1'),
            array('title' => 'Mizoram','country_id' => '1'),
            array('title' => 'Nagaland','country_id' => '1'),
            array('title' => 'Odisha','country_id' => '1'),
            array('title' => 'Punjab','country_id' => '1'),
            array('title' => 'Rajasthan','country_id' => '1'),
            array('title' => 'Sikkim','country_id' => '1'),
            array('title' => 'Tamil Nadu','country_id' => '1'),
            array('title' => 'Tripura','country_id' => '1'),
            array('title' => 'Jharkhand','country_id' => '1'),
            array('title' => 'Uttarakhand','country_id' => '1'),
            array('title' => 'Lakshadweep','country_id' => '1'),
            array('title' => 'Chandigarh','country_id' => '1'),
            array('title' => 'Pondicherry','country_id' => '1'),
            array('title' => 'Andaman and Nico.In.','country_id' => '1'),
            array('title' => 'West Bengal','country_id' => '1')
          );

        DB::table('states')->insert($data);
    }
}
