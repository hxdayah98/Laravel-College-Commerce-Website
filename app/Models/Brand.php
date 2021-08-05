<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

     protected $fillable = [
        // 'seller_id',
        'brand_name_en',
        'brand_name_my',
        'brand_slug_en',
        'brand_slug_my',
        'brand_image',
    ];

    // public function seller(){
    // 	return $this->belongsTo(Seller::class,'seller_id','id');
    // }

}
