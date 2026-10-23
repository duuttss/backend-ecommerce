<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    
    protected $fillable = [
        'name', 'description', 'category_id', 'price', 'img', 'stock', 'slug'
    ];

    // Relasi: 1 Produk dimiliki oleh 1 Kategori (Many-to-One / belongsTo)
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}