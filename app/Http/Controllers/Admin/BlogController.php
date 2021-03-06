<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
class BlogController extends Controller{
    public function getIndex(){
        //$post=Post::orderBy('fixed','desc')->orderBy('id','desc')->paginate(9);
        $post=Post::whereFixed('1')->orderBy('id','desc')->paginate(8);
    	$category=Category::all();
    	//return view('blog.index')->withPosts($post)->withCategory($category);
        return view(tema().'.blog_index')->withPosts($post)->withCategory($category)->render();
    }
    public function getSingle($slug){
    	$post=Post::where('slug','=',$slug)->first();
        $category=Category::all();
        if(!$post){
            $post=Post::orderBy('fixed','desc')->orderBy('id','desc')->paginate(9);
            return view(tema().'.blog_index')->withPosts($post)->withCategory($category);
        }else{
            return view(tema().'.blog_single')->withPost($post)->withCategory($category);
        }
    }
    public function Android($start=0){
        if ($start!=0) {
            $start=6*$start;
        }
        $post=Post::orderBy('fixed','desc')->orderBy('id','desc')->skip($start)->take(6)->get();
        $category=Category::all();
        return $post;
    }
}