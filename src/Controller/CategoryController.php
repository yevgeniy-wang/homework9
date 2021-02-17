<?php


namespace Hillel\Homework9\Controller;

use Hillel\Homework9\Model\Category;
use Hillel\Homework9\Model\Post;
use Illuminate\Http\RedirectResponse;


class CategoryController
{
    public function list()
    {

        $categories = Category::all();
        return view('pages/categories/list', compact('categories'));
    }

    public function create()
    {
        $category = new Category();

        return view('pages/categories/create', compact('category'));
    }

    public function store()
    {
        $data = request()->all();

        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->save();

        return new RedirectResponse('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('pages/categories/update', compact('category'));
    }

    public function update($id)
    {
        $category = Category::find($id);

        $data = request()->all();

        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->save();

        return new RedirectResponse('/categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $posts = $category->posts;
        foreach ($posts as $post) {
            $post->tags()->detach();
            $post->delete();
        }
        $category->delete();


        return new RedirectResponse('/categories');
    }


}