<?php

use Illuminate\Database\Seeder;
use App\Models\Master\Departement;

class TableDepartement extends Seeder
{
    public function run()
    {
        $departement = [
            ['name' => 'IT'],
            ['name' => 'Front Office'],
        ];
        foreach ($departement as $row) {
            Departement::create($row);
        }
    }
}
