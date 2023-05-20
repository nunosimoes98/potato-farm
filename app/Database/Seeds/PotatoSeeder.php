<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Potato;

class PotatoSeeder extends Seeder
{
    public function run()
    {
        helper('text');

         for($num=0;$num<5;$num++){
              $potato = new Potato();
              $insertdata['tipo_batata'] = 'batata_'.rand(1,99);
              $insertdata['tempo'] = rand(25,40);
              $insertdata['espaco'] = rand(2,10);
              $potato->insert($insertdata);
         }
    }
}
