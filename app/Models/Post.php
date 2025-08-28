<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
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
  }

  public static function find($slug)
  {
    return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
  }
}
