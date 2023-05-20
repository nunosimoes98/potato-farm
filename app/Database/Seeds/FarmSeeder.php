<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Farm;

class FarmSeeder extends Seeder
{
    public function run()
    {
        helper('text');

         for($num=0;$num<5;$num++){
              $farm = new Farm();
              $insertdata['nome_fazenda'] = 'fazenda_'.rand(1,99);
              $insertdata['espaco'] = rand(50,100);
              $farm->insert($insertdata);
         }
    }
}
