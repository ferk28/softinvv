<?php

use Illuminate\Database\Seeder;
use App\Models\Boss;

class BossesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Boss::create(["name"=>"Salvador Ramos","controlnum"=>"12345","status"=>"Alta","extension"=>"5751","area_id"=>"1","user_id"=>"1"]);
    }
}
