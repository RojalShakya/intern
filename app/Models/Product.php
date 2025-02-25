<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded=['id'];
    protected static function boot(){
        parent::boot();
        static::creating(function($product){
            $product->slug=Str::slug($product->title);
        });
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
