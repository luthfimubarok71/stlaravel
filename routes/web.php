<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Luthfi Mubarok',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod mollitia minima
            voluptate saepe cum unde aut autem quae repudiandae dolorem deleniti suscipit animi eaque quidem ad voluptatibus sed, deserunt
            aspernatur.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Luthfi Mubarok',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero neque enim asperiores,
            quam quidem praesentium facilis nam animi repellat laudantium adipisci cumque voluptatem fugit veritatis,
            aliquam consequatur? Dolorem, ea deserunt?',
        ],
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Luthfi Mubarok',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod mollitia minima
            voluptate saepe cum unde aut autem quae repudiandae dolorem deleniti suscipit animi eaque quidem ad voluptatibus sed, deserunt
            aspernatur.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Luthfi Mubarok',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero neque enim asperiores,
            quam quidem praesentium facilis nam animi repellat laudantium adipisci cumque voluptatem fugit veritatis,
            aliquam consequatur? Dolorem, ea deserunt?',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) abort(404);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
