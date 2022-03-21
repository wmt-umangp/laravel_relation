<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    //country wise post has many
    public function cwisep(){
        return $this->hasMany(Post::class);
    }
    public function country(){
        return $this->hasMany(User::class);
    }
}
