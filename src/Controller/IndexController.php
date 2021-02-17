<?php


namespace Hillel\Homework9\Controller;

use Illuminate\Http\RedirectResponse;

class IndexController
{
    public function index()
    {
        return view('pages/index');
    }
}
