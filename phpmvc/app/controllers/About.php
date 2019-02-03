<?php

class About extends Controller{

    function index(){
        $data['title'] = "About Me";
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }

    function page(){
        $data['title'] = "Halaman";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}