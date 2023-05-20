<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GenerateSeeder extends Seeder
{
    public function run()
    {
        $this->call('FarmSeeder');
        $this->call('PotatoSeeder');
    }
}
