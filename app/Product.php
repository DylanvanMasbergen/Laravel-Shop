<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    retrun $this->belongsTo(Category::class);
}
