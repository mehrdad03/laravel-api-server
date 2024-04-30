<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Database\Seeders\Trait\DisableForeignKeys;
use Database\Seeders\Trait\TruncateTable;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $this->disableForeignKeys();
        $this->truncate('posts');
        //untitled method come from PostFactory
        $posts = Post::factory(10)
            //  ->has(Comment::factory(3),'comments')
            ->untitled()->create();

        $posts->each(function (Post $post) {
            $post->users()->sync([FactoryHelper::getRandomModelId(User::class)]);
        });

        $this->enableForeignKeys();
    }

}
