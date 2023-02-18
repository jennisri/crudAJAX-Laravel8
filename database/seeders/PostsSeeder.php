<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Hai',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit provident cupiditate assumenda enim quibusdam facilis facere reiciendis quod, dolores. Nulla, alias. Ullam expedita quibusdam veniam excepturi cupiditate quas aut?'
        ]);
    }
}
