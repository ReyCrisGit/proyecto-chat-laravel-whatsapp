<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $account = new Account;
        $account->name = "Cristian";
        $account->last_name = "Barrios";
        $account->email = "reycrisbf@gmail.com";
        $account->password = "Barrios123";
        $account->phone_number = "+59167953476";
        $account->save();
    }
}
