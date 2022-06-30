<?php

use App\ComicModel;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $comic_list = config('comic');
            foreach($comic_list as $comic) {
                $new_comic = new ComicModel();
                $new_comic->title = $comic['title'];
                $new_comic->description = $comic['description'];
                $new_comic->thumb = $comic['thumb'];
                $new_comic->price = $comic['price'];
                $new_comic->series = $comic['series'];
                $new_comic->sale_date = $comic['sale_date'];
                $new_comic->type = $comic['type'];
                $new_comic->save();
            }
        }
    }
}
