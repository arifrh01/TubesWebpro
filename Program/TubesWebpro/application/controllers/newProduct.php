<?php
class newProduct extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/produk');
        $this->load->view('templates/footer');
    }
}
