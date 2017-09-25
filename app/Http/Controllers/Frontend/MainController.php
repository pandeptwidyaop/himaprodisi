<?php

namespace App\Http\Controllers\Frontend;

use App\Event;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class MainController extends Controller
{
    public function main(Request $request){

    }

    public function getPost(string $slug){
        $post = Post::findSlug($slug);
        $this->createPostSeo($post);
    }

    public function getEvent(string $slug){
        $event = Event::findSlug($slug);
        $this->createEventSeo($event);
    }

    protected function createPostSeo(Post $post){
        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription(substr($post->description,0,125));
    }

    protected function createEventSeo(Event $event){

    }
}
