<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class PadletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $padlet = new \App\Models\Padlet;
        $padlet->name = "Herr der Ringe";
        $padlet->published = new DateTime();
        $padlet->is_public = true;
        $padlet->save();


        // add entries to padlet
        $entry1 = new \App\Models\Entry;
        $entry1->text = "Buch Text 1";

        $entry2 = new \App\Models\Entry;
        $entry2->text = "Buch Text 2";

        $padlet->entries()->saveMany([$entry1,$entry2]);
        $padlet->save();


        // add ratings to entry
        $rating1 = new \App\Models\Rating;
        $rating1->rating = 1;
        $rating1->comment = "Comment 1";
        $rating1->username = "Liselotte"; //evtl weg

        $rating2 = new \App\Models\Rating;
        $rating2->rating = 5;
        $rating2->comment = "schleeeeecht";
        $rating2->username = "bingobongo";

        $entry1->ratings()->saveMany([$rating1,$rating2]);
        $entry1->save();


        // test Users - load them and write them to the db using eloquent ORM
        $users = \App\Models\User::all()->pluck("id");
        $padlet->users()->sync($users);
        $padlet->save();
    }
}
