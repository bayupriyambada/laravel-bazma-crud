<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = "Books";
    protected $fillable = ["name_book", "writer", "release", "categories_books_id"];
}
