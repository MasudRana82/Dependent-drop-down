<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // For usa
        $country  = Country::create(['name'=>'United states']);
        $state  = State::create(['country_id'=> $country->id, 'name' =>'Florida']);  
        City::create(['state_id'=> $state->id, 'name'=>'Miami']);
        City::create(['state_id'=> $state->id, 'name'=>'Tampa']);

        // for india
        $country = Country::create(['name' => 'India']);
        $state = State::create(['country_id' => $country->id, 'name' => 'Gujarat']);
        City::create(['state_id' => $state->id, 'name' => 'Rajkot']);
        City::create(['state_id' => $state->id, 'name' => 'Surat']);
    }
}
