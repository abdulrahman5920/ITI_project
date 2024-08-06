<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_item extends Model
{
    use HasFactory;
   
        protected $table= 'menu';
        protected $fillable = [
            'product_name',
            'product_category',
            'description',
            'price',
            'pic',
            'category_id',
        ];
        public function category()
        {
            return $this->belongsTo(Category::class);
        }
    }

