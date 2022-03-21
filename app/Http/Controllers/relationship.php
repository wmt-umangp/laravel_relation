<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class relationship extends Controller
{
    //country wise post
    public function showdata(){
        // $country=Country::find(1)->cwisep;
        $country = Country::with('cwisep')->find(1);
        // $post=Post::where('country_id',1)->get();
        // $country = Country::with('cwisep')->find(1);
        // $country = Country::with('cwisep')->get();
        // return view('relationship',['countries'=>$country]);
        return $country;
        // return $post;
    }

    public function showcomments(){
        $comment=Comment::with('comments')->find(5);
        return $comment;
    }

    public function userdata(){
        $user=User::with('country')->find(1);
        return $user;
    }

    public function userdata1(){
        $user1=Post::with('showuser')->find(3);
        return $user1;
    }

}
