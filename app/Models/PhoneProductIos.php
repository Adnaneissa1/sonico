<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneProductIos extends Model
{
    use HasFactory;

    protected $table = 'phone_product_ios';

    protected $fillable = [
        'nameP',
        'image',
    ];
}
