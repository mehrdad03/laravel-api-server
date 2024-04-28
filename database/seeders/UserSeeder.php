<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Trait\DisableForeignKeys;
use Database\Seeders\Trait\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('users');
        User::factory(10)->create();
        $this->enableForeignKeys();
    }
}
