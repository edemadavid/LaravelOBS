<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('account_types')->delete();


        DB::table('account_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Savings',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Current',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Dollar',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
    }
}
