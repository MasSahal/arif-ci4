<?php

namespace App\Controllers;

class Nama extends BaseController
{

    private $categoryModel;
    private $postModel;

    public function __construct(){
        $this->categoryModel = new \App\Models\Category(); 
        $this->postModel = new \App\Models\Post();
    } 

    public function index()
    {
        return view('templetes');
    }

    public function category()
    {
        
        return view('category');
    }
    public function post()
    {
        
        return view('post');
    }
    public function insert_category(){

        $name = $this->request->getPost("name");

        $data = ([
            "category_name" => $name
        ]);

        $this->categoryModel->insert($data);

        return redirect()->to(base_url("/kategori"));
    }
}
