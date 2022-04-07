<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $guarded = ['id']; 

    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, fn($query, $search)=>
            $query->where('title', 'like', '%' . $search . '%')->
            orWhere('body', 'like', '%' . $search . '%')
        );
        
        $query->when($filters['category'] ?? false, fn($query, $category)=>
            $query->whereHas('category', fn($query)=>
            $query->where('slug', $category)
            )
        );

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // ini agar jika ada yang mencari data tentang post akan selalu dihubungkan dengan slug, bukan id
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
