<?php 
namespace App\Controllers;
class Pages extends BaseController
{
    public function index()
    {
        echo vew('layouts/header');
        echo view('welcome_message');
    }
    public function about()
    {
        echo view('about');
    }
}

?>