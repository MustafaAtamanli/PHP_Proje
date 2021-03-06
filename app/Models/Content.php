<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    use HasFactory;

    #Many to One
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
