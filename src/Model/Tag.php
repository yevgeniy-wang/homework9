<?php


namespace Hillel\Homework9\Model;


class Tag extends \Illuminate\Database\Eloquent\Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}