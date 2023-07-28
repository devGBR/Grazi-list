<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Abas;
use App\Models\User;


class sistemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Abas::create([
            "titulo" => "GERAL"
        ]);

        User::create([
            'name' => 'Evellyn Grazielly',
            'email' => 'evellynlima70@gmail.com',
            'password' => bcrypt('159926'),
        ]);
    }
}
