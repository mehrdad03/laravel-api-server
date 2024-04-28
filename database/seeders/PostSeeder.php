<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Seeders\Trait\DisableForeignKeys;
use Database\Seeders\Trait\TruncateTable;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable,DisableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $this->disableForeignKeys();
        $this->truncate('posts');
        //untitled method come from PostFactory
        Post::factory(10)->untitled()->create();
        $this->enableForeignKeys();
    }

}
