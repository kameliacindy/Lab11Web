<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Kontak',
            'content' => 'Ini adalah halaman kontak yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function faqs()
    {
        return view('faqs', [
            'title' => 'Halaman Faqs',
            'content' => 'Ini adalah halaman faqs yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function tos()
    {
        return view('tos', [
            'title' => 'Halaman Tos',
            'content' => 'Ini adalah halaman tos yang menjelaskan tentang isi halaman ini.'
        ]);
    }
}



