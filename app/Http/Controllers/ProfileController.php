<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'M. Altaf Rabbani',
            'npm' => '2457052010',
            'kelas' => 'Sistem Informasi'
        ];

        return view('profile', $data);
    }
}