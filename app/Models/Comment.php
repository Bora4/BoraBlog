<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     *
     * @var list<string>
     */

     protected $fillable = [
        "email",
        "name",
        "message",
        "post_id",
        "user_id"
     ];
}
