<?php


namespace Hillel\Homework9\Model;


class Category extends \Illuminate\Database\Eloquent\Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}