<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    protected $fillable['book_title, book_author, book_desc'];

    protected $cast = ['user_id' => 'int'];
}
