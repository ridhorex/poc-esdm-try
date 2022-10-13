<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class VoltageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voltages')->delete();

        for($i = 0; $i < 10; $i++) {
            DB::table('voltages')->insert([
                'name' => Crypt::encryptString("USER " . $i),
                'email' => Crypt::encryptString("user-".$i.'@gmail.com'),
                'password' => Hash::make('password'),
            ]);
        }
    }
}
