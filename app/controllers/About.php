<?php

class About extends Controller{
    public function index($nama = "Hira", $pekerjaan = "...", $umur = 19){
        $data["judul"] = "About me";
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data["umur"] = $umur;
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }

    public function page(){
        $data["judul"] = "Pages";
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}