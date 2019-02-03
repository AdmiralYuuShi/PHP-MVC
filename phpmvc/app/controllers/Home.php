<?php

class Home extends Controller{
    function index(){
        $data['title'] = "Home";
        $this->view("templates/header", $data);
        $this->view("home/index");
        $this->view("templates/footer");
    }
}