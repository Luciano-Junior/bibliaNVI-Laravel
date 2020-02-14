<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $fillable = [
        'name', 'abbrev', 'testament',
    ];

    protected $table = 'books';
}
