<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;


    public function parent(): HasOne
    {
        return $this->
        hasOne(Category::class, 'id', 'parent_id');
    }

    public function children() : HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products() : HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
