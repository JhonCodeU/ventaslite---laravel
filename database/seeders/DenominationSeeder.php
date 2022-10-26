<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denomination::create([
            'type' => 'CASH',
            'value' => 100000,
        ]);

        Denomination::create([
            'type' => 'CASH',
            'value' => 50000,
        ]);

        Denomination::create([
            'type' => 'CASH',
            'value' => 20000,
        ]);

        Denomination::create([
            'type' => 'CASH',
            'value' => 10000,
        ]);

        Denomination::create([
            'type' => 'CASH',
            'value' => 5000,
        ]);

        Denomination::create([
            'type' => 'CASH',
            'value' => 2000,
        ]);

        Denomination::create([
            'type' => 'COIN',
            'value' => 1000,
        ]);

        Denomination::create([
            'type' => 'COIN',
            'value' => 500,
        ]);

        Denomination::create([
            'type' => 'COIN',
            'value' => 200,
        ]);

        Denomination::create([
            'type' => 'COIN',
            'value' => 100,
        ]);

        Denomination::create([
            'type' => 'COIN',
            'value' => 50,
        ]);

        Denomination::create([
            'type' => 'OTHER',
            'value' => 0,
        ]);
    }
}
