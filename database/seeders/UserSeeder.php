<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ameilia',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'userable_type' => 'App\Admin',
            'userable_id' => 1,
            'created_at'  => Carbon::now(),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Ameilia Amel',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('superadmin'),
            'userable_type' => 'App\SuperAdmin',
            'userable_id' => 1,
            'created_at'  => Carbon::now(),
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
