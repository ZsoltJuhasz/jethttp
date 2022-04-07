<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PostController extends Controller
{
    public function index(){

        //ez JSON adatokat fog nekünk adni
        $posts = Http::get("https://jsonplaceholder.typicode.com/posts"); //ez a get metódus gyűjti be a távoli szerverről az adatokat

        // return json_decode($post);  //átadjuk neki a post változot amiben tároljuk a JSON adatokat amiket kaptam az oldalról

        
        return view("posts", [
            "posts" => json_decode($posts) //kibontja nekünk a json formátumot és konkrétan az adatot jeleníti meg
        ]);

    }
}
