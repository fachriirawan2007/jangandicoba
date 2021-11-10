<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        echo "Halo ini adalah controller <a  href='" . route_to('nama'). "'>Link ke routing profil </a>";
    }

    public function nama()
    {
        echo "Haloo Aku Routes <a  href='" . route_to('index'). "'>Link ke routing index </a>";
    }
}