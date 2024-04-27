<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class ServiceController extends Controller
{
    static function getDataOfApi($url)
    {
        return Http::get($url)->object();
    }

    static function limitRecords($articles, $page=1)
    {
        $limit = ($page == null || $page == 1) ? 0 : $page * 10; 
        return array_slice($articles, $limit, 10);
    }

    static function saveSession($name, $data)
    {
        Session::put($name, $data);
    }
    static function getSession($articles)
    {
        return Session::get($articles);
    }

    static function putUserOnArticlesRandom($users, $articles)
    {
        foreach ($users->results as $key => $user) {
            $articles[$key]->author = $user->name->title.' '.$user->name->first.' '.$user->name->last;
            $articles[$key]->id = $key;
        }
        return $articles;
    }
}
