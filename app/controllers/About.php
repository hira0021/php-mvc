<?php

class About{
    public function index($nama = "Hira", $pekerjaan = "...", $umur = 19){
        echo "Halo saya $nama, Saya seorang $pekerjaan, saya berumur $umur tahun";
    }

    public function page(){
        echo "About/page";
    }
}