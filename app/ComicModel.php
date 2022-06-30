<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicModel extends Model
{
    protected $table = 'comic';

    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type'
    ];
}
