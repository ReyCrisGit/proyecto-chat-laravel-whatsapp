<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact1 = new Contact;
        $contact1->name = "Victor";
        $contact1->last_name = "Peña";
        $contact1->phone_number = "+59172729789";
        $contact1->account_id = 1;
        $contact1->save();

        $contact2 = new Contact;
        $contact2->name = "Erlander";
        $contact2->last_name = "Guzman";
        $contact2->phone_number = "+59170421611";
        $contact2->account_id = 1;
        $contact2->save();
    }
}
