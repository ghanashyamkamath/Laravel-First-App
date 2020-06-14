<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome Ghanashyam!';
        return view('pages.index',compact('title'));
    }
    public function about(){
        $title = 'About Us!';
        return view('pages.about',compact('title'));
    }
    public function services(){
        $data = array(
            'title' => 'Services!',
            'services' => ['Web Design','Programming','SEO']

        );
        return view('pages.services')->with($data);
    }
}
