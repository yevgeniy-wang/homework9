<?php

namespace Hillel\Homework9\Controller;


use Hillel\Homework9\Model\Category;
use Hillel\Homework9\Model\Post;
use Illuminate\Http\RedirectResponse;

class PostController
{
    public function list()
    {
        $posts = Post::all();
        return view('pages/posts/list', compact('posts'));
    }

    public function create()
    {
        $post = new Post();
        $categories = Category::all();

        return view('pages/posts/create', ['categories' => $categories, 'post' => $post]);
    }

    public function store()
    {
        $data = request()->all();

        $post = new Post();
        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->body = $data['body'];
        $post->category_id = $data['category_id'];
        $post->save();

        return new RedirectResponse('/posts');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        return view('pages/posts/update', ['categories' => $categories, 'post' => $post]);
    }

    public function update($id)
    {
        $post = Post::find($id);

        $data = request()->all();

        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->body = $data['body'];
        $post->category_id = $data['category_id'];
        $post->save();

        return new RedirectResponse('/posts');
    }

    public function destroy($id)
    {
        $post = \Hillel\Homework9\Model\Post::find($id);

        $post->tags()->detach();
        $post->delete();

        return new RedirectResponse('/posts');
    }
}