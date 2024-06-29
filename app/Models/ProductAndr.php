<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAndr extends Model
{
    use HasFactory;

    protected $table = 'product_andr';

    protected $fillable = [
        'nameP',
        'image',
        'category_phone_andr_id',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryPhoneAndr::class, 'category_phone_andr_id');
    }
}
