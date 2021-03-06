<?php
// php artisan make:model Post

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Tidak perlu didefinisikan, karena sudah sesuai dengan penamaan file model dengan singular (tanpa -s)
    // protected $table = 'posts';

    // property untuk pengisian massal dengan method create, jika save tidak perlu property fillable
    protected $fillable = [
        'title',
        'content'
    ];

    // alternatifnya, tanpa mendefinisikan nama kolom
    // protected $guarded = [];

    // MENDAFTARKAN published_at sebagai instance Carbon
    protected $dates = [
        'published_at',
    ];
}
