<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function posts()
    {
        return $this->hasMany(POst::class);
    }
    public function getByCategory(int $limit_count = 5)
    {
        return $this->posts()->with('category')->oderBy('updeted_at', 'DESC')->paginate($limit_count);
    }
}
