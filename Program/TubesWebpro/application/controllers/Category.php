<?php

class Category extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/Kategori');
        $this->load->view('templates/footer');
    }
}
