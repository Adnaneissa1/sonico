<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPhoneAndr extends Model
{
    use HasFactory;

    protected $fillable = ['nameCatg', 'image'];

    public function productPhoneAndrs()
    {
        return $this->hasMany(ProductAndr::class);
    }
}

