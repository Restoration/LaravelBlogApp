<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10;$i++) {
            $article = new Article;
            $article->title = 'Title' . $i;
            $article->body = 'Message' . $i;
            $article->save();
        }
    }
}
