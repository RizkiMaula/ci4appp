<?php

namespace App\Controllers;

// when installed via composer
// require_once 'vendor/autoload.php';

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'home | WebBjPlr',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. Bangs No. 21',
                    'kota' => 'Jakarta'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jl Setiabudi No. 22',
                    'kota' => 'Bandung'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
