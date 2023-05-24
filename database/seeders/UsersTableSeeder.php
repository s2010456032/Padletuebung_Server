<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->username = "nirakooo";
        $user1->firstname = "Karin";
        $user1->lastname = "Stütz";
        $user1->image_url = "https://www.shutterstock.com/image-vector/cute-happy-smiling-little-baby-260nw-454978309.jpg";
        $user1->password = bcrypt('password123');
        $user1->save();

        $user2 = new User();
        $user2->username = "coolerUsername";
        $user2->firstname = "Der";
        $user2->lastname = "Coole";
        $user2->image_url = "https://www.shutterstock.com/image-vector/cute-happy-smiling-little-baby-260nw-454978309.jpg";
        $user2->password = bcrypt('pwdercoole');
        $user2->save();

        $user3 = new User();
        $user3->username = "HotteLotte";
        $user3->firstname = "Liselotte";
        $user3->lastname = "Heidelberg";
        $user3->image_url = "https://www.shutterstock.com/image-vector/cute-happy-smiling-little-baby-260nw-454978309.jpg";
        $user3->password = bcrypt('pwhottelotte');
        $user3->save();

    }
}
