<?php

use Illuminate\Database\Seeder;
use App\Models\Master\Position;

class TablePosition extends Seeder
{
    public function run()
    {
        $position = [
            ['name' => 'Software Developer', 'status' => 'Staff', 'salary' => 30000000],
            ['name' => 'Manager', 'status' => 'Staff', 'salary' => 5000000],
        ];
        foreach ($position as $row) {
            Position::create($row);
        }
    }
}
