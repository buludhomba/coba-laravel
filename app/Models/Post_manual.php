<?php

namespace App\Models;


class Post 
{
   private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quibusdam animi at esse, commodi possimus, repellendus vel quas repudiandae reprehenderit distinctio modi illo itaque! At, itaque dolor. Commodi, veritatis id repellat quisquam, excepturi et possimus quae ipsam placeat, non optio delectus beatae dignissimos odio repudiandae. Porro iste minus maiores rem autem unde animi quisquam sit doloribus impedit maxime consectetur nobis facere vel totam reprehenderit repellendus, ipsa illum esse blanditiis voluptas alias quos veritatis. Autem culpa vitae deleniti, odit officia labore tempora iure ex nesciunt ipsam voluptas commodi animi quaerat numquam cum eveniet adipisci pariatur. Iusto tenetur molestias atque quis officiis!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quibusdam animi at esse, commodi possimus, repellendus vel quas repudiandae reprehenderit distinctio modi illo itaque! At, itaque dolor. Commodi, veritatis id repellat quisquam, excepturi et possimus quae ipsam placeat, non optio delectus beatae dignissimos odio repudiandae. Porro iste minus maiores rem autem unde animi quisquam sit doloribus impedit maxime consectetur nobis facere vel totam reprehenderit repellendus, ipsa illum esse blanditiis voluptas alias quos veritatis."
    ]
    ];

    // jika static kita return harus menggunakan self:: sdgkn properti  selain static menggunakan $this->
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];

        // dibawah ini menggantikan foreach 
        return $posts->firstWhere('slug', $slug);
    }
}
