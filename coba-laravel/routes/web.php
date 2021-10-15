<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "name" => "Rifki Perdiansyah",
        "email" => "Rifki@gmail.com",
        "image" => "picture.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "autor" => " Rifki Perdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore inventore doloremque veritatis, tempore aperiam quas esse incidunt modi alias corrupti, eum quae? Cum quo autem itaque placeat magni reprehenderit officiis ratione voluptatem culpa rem, temporibus ex accusantium! Aliquid pariatur at commodi esse inventore ipsam quaerat quod voluptate. Numquam laborum inventore beatae, minima accusamus perspiciatis sed maiores vel debitis, accusantium voluptas incidunt pariatur impedit dolor neque praesentium dignissimos modi sequi c
            umque? Ex, fuga commodi. Vel corporis, at quo iusto inventore repellendus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "autor" => "Dodo ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore inventore doloremque veritatis, tempore aperiam quas esse incidunt modi alias corrupti, eum quae? Cum quo autem itaque placeat magni reprehenderit officiis ratione voluptatem culpa rem, temporibus ex accusantium! Aliquid pariatur at commodi esse inventore ipsam quaerat quod voluptate. Numquam laborum inventore beatae, minima accusamus perspiciatis sed maiores vel debitis, accusantium voluptas incidunt pariatur impedit dolor neque praesentium dignissimos modi sequi c
            umque? Ex, fuga commodi. Vel corporis, at quo iusto inventore repellendus."
        ],
    ];


    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post

Route::get('posts/{slug}',function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "autor" => " Rifki Perdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore inventore doloremque veritatis, tempore aperiam quas esse incidunt modi alias corrupti, eum quae? Cum quo autem itaque placeat magni reprehenderit officiis ratione voluptatem culpa rem, temporibus ex accusantium! Aliquid pariatur at commodi esse inventore ipsam quaerat quod voluptate. Numquam laborum inventore beatae, minima accusamus perspiciatis sed maiores vel debitis, accusantium voluptas incidunt pariatur impedit dolor neque praesentium dignissimos modi sequi c
            umque? Ex, fuga commodi. Vel corporis, at quo iusto inventore repellendus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "autor" => "Dodo ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore inventore doloremque veritatis, tempore aperiam quas esse incidunt modi alias corrupti, eum quae? Cum quo autem itaque placeat magni reprehenderit officiis ratione voluptatem culpa rem, temporibus ex accusantium! Aliquid pariatur at commodi esse inventore ipsam quaerat quod voluptate. Numquam laborum inventore beatae, minima accusamus perspiciatis sed maiores vel debitis, accusantium voluptas incidunt pariatur impedit dolor neque praesentium dignissimos modi sequi c
            umque? Ex, fuga commodi. Vel corporis, at quo iusto inventore repellendus."
        ],
    ];

    $new_post = [];

    foreach($blog_posts as $post)
    {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);

});
