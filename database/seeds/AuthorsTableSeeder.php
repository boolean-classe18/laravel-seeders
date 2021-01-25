<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = config('authors');

        foreach ($authors as $author) {
            $new_author_object = new Author();
            $new_author_object->name = $author['name'];
            $new_author_object->lastname = $author['lastname'];
            $new_author_object->date_of_birth = $author['date_of_birth'];
            $new_author_object->save();
        }
    }
}
