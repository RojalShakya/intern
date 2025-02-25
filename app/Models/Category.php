<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    //
    protected $guarded=['id'];
    public static function boot(){
        parent::boot();
     static::creating(function($category){
        $category->slug=Str::slug($category->title);
    });
}
    public function products(){
        return $this->hasMany(Product::class);
    }
}
