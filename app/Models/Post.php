<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function postmodel(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function showuser(){
        return $this->belongsTo(User::class,'user_id');
    }
}
