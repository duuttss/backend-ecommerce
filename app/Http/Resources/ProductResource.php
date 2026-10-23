<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->product_id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => (float) $this->price,
            'stock' => (int) $this->stock,
            
            // Logika Gambar: Jika ada file, pakai dari storage. Jika kosong, pakai gambar dummy.
            'img_url' => $this->img 
    ? (str_starts_with($this->img, 'http') 
        ? $this->img // Jika isinya link internet (Google/Unsplash), pakai langsung
        : url('storage/' . $this->img)) // Jika isinya file lokal, pakai storage
    : 'https://placehold.co/300x300/e2e8f0/475569?text=' . urlencode($this->name),

            'category' => [
                'id' => $this->category_id,
                'name' => $this->category?->category,
            ],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}