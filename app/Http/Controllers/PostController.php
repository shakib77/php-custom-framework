<?php

namespace Shaon\App\Http\Controllers;
include('../../../config/app.php');

class PostController extends BaseController
{
    public function index()
    {
        // $value = $config['app'];
        $name = 'Shaon site';


        $posts = [
            'item1' => 'Value 1',
            'item2' => 'Value 2',
            'item3' => 'Value 3',
        ];


        return $this->render('post', compact('name', 'posts', 'value'));

        // $content = file_get_contents(__DIR__.'/../../../resources/posts.php');

        // return $content;
    }
}