<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable =[
        'comment_id','user_id', 'body','post_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
