<?php

namespace Database\Seeders;

use App\Models\CampusList;
use App\Models\FollowCampus;
use App\Models\JurusanCampus;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Herri Purba',
            'username' => 'herripurba',
            'email' => 'herripurba@gmail.com',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Herri Purba 2',
            'username' => 'herripurba2',
            'email' => 'herripurba2@gmail.com',
            'password' => bcrypt('123'),
        ]);

        CampusList::truncate();
        CampusList::create([
            'name' => 'Institut Teknologi Sepuluh Nopember',
            'accreditation' => 'A',
            'phone_number' => '031-5994251-4(1132)',
            'fax' => '031-5939632',
            'web_link' => 'https://www.its.ac.id/id/beranda/',
            'maps_link' => 'https://www.google.com/maps/place/Institut+Teknologi+Sepuluh+Nopember/@-7.282356,112.7949253,15z/data=!4m2!3m1!1s0x0:0x306c3c99adedb258?sa=X&ved=2ahUKEwjolYLlluf6AhUr63MBHWDPBYsQ_BJ6BQiWARAF',
        ]);
        CampusList::create([
            'name' => 'Institut Teknologi Sepuluh Nopember',
            'accreditation' => 'A',
            'phone_number' => '022-2500935',
            'fax' => '0822-2500935',
            'web_link' => 'https://www.itb.ac.id/',
            'maps_link' => 'https://www.google.com/maps/place/Institut+Teknologi+Bandung/@-6.8914747,107.6061798,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e65767c9b183:0x2478e3dcdce37961!8m2!3d-6.89148!4d107.6106591',
        ]);
        CampusList::create([
            'name' => 'Institut Surabaya',
            'accreditation' => 'B',
            'phone_number' => '022-2500935',
            'fax' => '0822-2500935',
            'web_link' => 'https://www.itb.ac.id/',
            'maps_link' => 'https://www.google.com/maps/place/Institut+Teknologi+Bandung/@-6.8914747,107.6061798,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e65767c9b183:0x2478e3dcdce37961!8m2!3d-6.89148!4d107.6106591',
        ]);
        CampusList::create([
            'name' => 'Universitas Indonesia',
            'accreditation' => 'A',
            'phone_number' => '021-7867222',
            'fax' => '0822-2500935',
            'web_link' => 'https://www.ui.ac.id/',
            'maps_link' => 'https://www.google.com/maps/place/Universitas+Indonesia/@-6.3606176,106.8250403,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ec1a804e8b85:0xd7bf80e1977cea07!8m2!3d-6.3606229!4d106.8272343',
        ]);
        CampusList::create([
            'name' => 'Universitas Padjadjaran',
            'accreditation' => 'A',
            'phone_number' => '022-84288828',
            'fax' => '0822-2500935',
            'web_link' => 'https://www.unpad.ac.id/',
            'maps_link' => 'https://www.google.com/maps/place/Universitas+Padjadjaran/@-6.9261268,107.7724941,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e653eb17e239:0xc6192a1f92aa9e41!8m2!3d-6.9261321!4d107.7746881',
        ]);

        JurusanCampus::truncate();
        JurusanCampus::create([
            'campus_id' => 1,
            'name' => "Teknik Informatika",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);
        JurusanCampus::create([
            'campus_id' => 1,
            'name' => "Aktuaria",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);
        JurusanCampus::create([
            'campus_id' => 1,
            'name' => "Biologi",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);
        JurusanCampus::create([
            'campus_id' => 1,
            'name' => "Fisika",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);
        JurusanCampus::create([
            'campus_id' => 1,
            'name' => "Kimia",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);
        JurusanCampus::create([
            'campus_id' => 1,
            'name' => "Matematika",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);
        JurusanCampus::create([
            'campus_id' => 2,
            'name' => "STEI",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);
        JurusanCampus::create([
            'campus_id' => 2,
            'name' => "FTTM",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);
        JurusanCampus::create([
            'campus_id' => 2,
            'name' => "SAPPK",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);
        JurusanCampus::create([
            'campus_id' => 2,
            'name' => "FTMD",
            'accreditation' => "A",
            'new_student_quota' => 100,
            'entry_percentage' => 31.5,
        ]);

        FollowCampus::truncate();
        FollowCampus::create([
            'user_id' => 1,
            'campus_id' => 1,
        ]);
        FollowCampus::create([
            'user_id' => 1,
            'campus_id' => 2,
        ]);
        FollowCampus::create([
            'user_id' => 2,
            'campus_id' => 4,
        ]);
    }
}
