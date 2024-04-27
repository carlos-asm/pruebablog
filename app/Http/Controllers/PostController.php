<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Http\Controllers\ServiceController;

class PostController extends Controller
{
    private $postsRandom;
    private $usersRandom;

    public function index()
    {
        $this->getPostsRandom();
        $this->getUsersRandom();
        $this->putUserOnArticlesRandom();
        $postsRandom = $this->limitRecords( request()->page );
        $this->saveSessionPostsRandom();
        $postController = Post::paginate(10); 
        $usersRandom = $this->usersRandom;

        return view('post.index', compact(['postsRandom', 'usersRandom', 'postController']));
    }

    public function show($post)
    {
        $articles = ServiceController::getSession('articles');
        $posts = $articles[$post-1];
        return view('post.show', compact('posts'));
    }

    private function getPostsRandom()
    {
        $this->postsRandom = ServiceController::getDataOfApi(env('APP_ENDPOINT_NEW').env('API_KEY'));
    }

    private function getUsersRandom()
    {
        $this->usersRandom = ServiceController::getDataOfApi(env('APP_ENDPOINT_USERS_RANDOM'));
    }

    private function limitRecords( $page=1)
    {
        return ServiceController::limitRecords($this->postsRandom,$page);
    }

    private function saveSessionPostsRandom()
    {
        ServiceController::saveSession('articles', $this->postsRandom);
    }

    private function putUserOnArticlesRandom()
    {
        $this->postsRandom = ServiceController::putUserOnArticlesRandom($this->usersRandom, $this->postsRandom->articles);
    }

}
