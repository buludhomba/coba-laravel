<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // fillable property yg boleh diisi
    // protected $fillable = ['title', 'category_id', 'slug', 'excerpt', 'body'];

    // guarded ini kebalikan fillable, jdi semua field boleh diisi kecuali id
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
