<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tag;
use App\Story;

class StoryController extends Controller
{
    //
    public function tags() {
    	$tags = Tag::all();
    	return view('tags', ['tags' => $tags]);
    }

    public function index() {
    	$stories = Story::all();
    	return view('stories', ['stories' => $stories]);
    	//return "Hello from StoryController";
    }
}
