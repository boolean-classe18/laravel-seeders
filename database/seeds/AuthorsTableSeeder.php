<?php

use Illuminate\Database\Seeder;
use App\Author;
use Faker\Generator as Faker;
use Carbon\Carbon;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = config('authors');

        foreach ($authors as $author) {
            $new_author_object = new Author();
            $new_author_object->name = $author['name'];
            $new_author_object->lastname = $author['lastname'];
            $data_nascita = $author['date_of_birth'];
            $new_author_object->date_of_birth = Carbon::createFromFormat('d/m/Y', $data_nascita);
            $new_author_object->save();
        }

        // for ($i=0; $i < 100; $i++) {
        //     $new_author_object = new Author();
        //     $new_author_object->name = $faker->firstName();
        //     $new_author_object->lastname = $faker->lastName();
        //     $new_author_object->date_of_birth = $faker->date();
        //     $new_author_object->save();
        // }

    }
}
