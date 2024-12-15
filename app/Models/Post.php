<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     *
     * @var list<string>
     */

     protected $fillable = [
        "title",
        "message",
        "category_id",
        "user_id"
     ];
}
