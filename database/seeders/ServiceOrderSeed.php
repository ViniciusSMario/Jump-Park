<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceOrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_orders')->insert([
            'vehiclePlate' => 'CGF0011',
            'entryDateTime' => '2023-03-25 14:51:20',
            'exitDateTime' => '2023-03-25 15:50:00',
            'priceType' => 'CONVENIO',
            'price' => 10,
            'userId' => 1
        ]);
    }
}
