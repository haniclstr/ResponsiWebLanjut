<?php

namespace App\Controllers;

class PostController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Blog - Post'
        ];
        echo view('layout/header', $data);
        echo view('/v_posts');
        echo view('layout/footer');
    }
}
