<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $filllable = [
         'post_id', 'user_id', 'title'
    ];
    public function user(){
        return $this->belongsTo('App\User','id','user_id');
    }
    public function comment(){
        return $this->hasMany('App\Comment','post_id');
    }
}
