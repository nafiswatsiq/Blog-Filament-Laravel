<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Filament\Resources\PostResource;

class PageController extends Controller
{
    public function home()
    {
        SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl( config('app.url') );
        SEOTools::setCanonical('');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage('https://nafiswatsiq.github.io/assets/img/logo%20ch.jpg');
        
        $posts = Post::where('is_published', true)->latest()->with('media')->get();
        // $image = Post::first()->getFirstMediaUrl('images', 'thumb');
        // dd($posts);
        return view('home', compact('posts'));
    }

    public function article($slug)
    {
        $post = Post::where('slug', $slug)->first();

        SEOTools::setTitle($post->title);
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl( config('app.url') );
        SEOTools::setCanonical('');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage('https://nafiswatsiq.github.io/assets/img/logo%20ch.jpg');
        
        return view('article', compact('post'));
    }
}
