<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;



class ArticlesController extends Controller
{
    //
    public function index()
    {

    	$articles=Article::latest('created_at')->get();

    	return view('articles.index',compact('articles'));
    }

    public function show($id)
    {

    	$article=Article::findorFail($id);
       return view('articles.show',compact('article'));
    }

    public function create()
    {

        return view('articles.create');
    }
    public function store()
    {

      $input=Request::all();
     // $title=Request::get('title');
      $article=New Article;
      $article->create($input);
      return redirect('articles');
      
    }
}
