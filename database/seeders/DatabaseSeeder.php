<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Sella Putri Sari',
            'email' => 'sellaputrisari@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum minus error possimus libero laudantium quaerat, aliquid ipsum rem! Ullam assumenda voluptates voluptatibus porro, laboriosam enim ratione soluta obcaecati reiciendis provident consequatur voluptas consectetur, blanditiis explicabo earum neque atque nobis. Illum, labore magnam assumenda ipsam deserunt voluptas nesciunt sequi adipisci quibusdam consectetur blanditiis vitae quam deleniti unde dolorem modi? Temporibus voluptatem natus, alias esse sit rerum id voluptatum. Earum, officia ipsam.',
            'category_id' => 1,
            'user_id' => 1
        ]);


        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum minus error possimus libero laudantium quaerat, aliquid ipsum rem! Ullam assumenda voluptates voluptatibus porro, laboriosam enim ratione soluta obcaecati reiciendis provident consequatur voluptas consectetur, blanditiis explicabo earum neque atque nobis. Illum, labore magnam assumenda ipsam deserunt voluptas nesciunt sequi adipisci quibusdam consectetur blanditiis vitae quam deleniti unde dolorem modi? Temporibus voluptatem natus, alias esse sit rerum id voluptatum. Earum, officia ipsam.',
            'category_id' => 1,
            'user_id' => 1
        ]);


        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum minus error possimus libero laudantium quaerat, aliquid ipsum rem! Ullam assumenda voluptates voluptatibus porro, laboriosam enim ratione soluta obcaecati reiciendis provident consequatur voluptas consectetur, blanditiis explicabo earum neque atque nobis. Illum, labore magnam assumenda ipsam deserunt voluptas nesciunt sequi adipisci quibusdam consectetur blanditiis vitae quam deleniti unde dolorem modi? Temporibus voluptatem natus, alias esse sit rerum id voluptatum. Earum, officia ipsam.',
            'category_id' => 2,
            'user_id' => 1
        ]);




    }
}
