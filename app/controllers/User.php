<?php

class User
{
    public function index()
    {
        echo 'User/index';
    }
    public function profile($nama = "Andre", $pekerjaan = "Siswa")
    {
        echo "Salam kenal saya $nama, saya seorang $pekerjaan";
    }
}
