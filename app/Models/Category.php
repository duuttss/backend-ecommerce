<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Beritahu Laravel bahwa Primary Key-nya bukan 'id' bawaan
    protected $primaryKey = 'category_id';
    
    // Kolom apa saja yang boleh diisi
    protected $fillable = ['category'];

    // Relasi: 1 Kategori punya banyak Produk (One-to-Many)
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
}