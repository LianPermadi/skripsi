<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "Lian Permadi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae veniam iure neque assumenda, perferendis, laboriosam unde necessitatibus magnam voluptatum iusto delectus minus, dolorum facere natus. Velit dolorem suscipit aliquam corporis perferendis corrupti provident, ex ipsa necessitatibus adipisci omnis ea magnam tenetur praesentium consequatur id tempora vel cum asperiores voluptatum natus! Non omnis suscipit laboriosam quo vitae voluptas quidem quod fuga corrupti saepe? Quis rem totam delectus, corrupti eos eveniet quae nesciunt! Odio culpa ea recusandae dolores dolor et tenetur vero?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-posts-kedua",
            "author" => "lL",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error deleniti dolore deserunt eum maxime sequi voluptatibus dolorem suscipit tempore possimus? Unde sint iusto debitis architecto, suscipit exercitationem nisi eum cumque culpa voluptatibus autem facere blanditiis soluta necessitatibus ullam magni laborum dicta mollitia adipisci qui! Maxime a reiciendis quisquam magnam accusamus. Eveniet, odio eum obcaecati maiores quaerat libero officiis rem ducimus debitis labore neque aliquam minima, expedita repellendus modi ut similique molestias aliquid sed reiciendis. Non corporis voluptatum consequatur recusandae quis aspernatur ab, eius deleniti, totam illum dolorem tempora! Reiciendis magni quam quaerat. Veritatis tempore non qui molestiae, ipsam illum vitae."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
    $posts = static::all();
    // $post = [];
    // foreach ($posts as $p) {
    //     if ($p["slug"] === $slug) {
    //         $post = $p;
    //     }
    // }
    return $posts->firstWhere('slug', $slug);
}
}