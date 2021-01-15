<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        $title = "Welcome to ProgrammingKnowledge";
        return view('pages.index', compact('title'));
    }
    function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
