<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $allPosts= [
        ['id'=>1, 'title'=>'php','posted_by'=>'ahmed', 'created_at'=>'2024-10-22 09:00:00'],
        ['id'=>2, 'title'=>'python','posted_by'=>'ali', 'created_at'=>'2024-10-23 09:00:00'],
        ['id'=>3, 'title'=>'java','posted_by'=>'mohamed', 'created_at'=>'2024-10-26 09:00:00'],
        ['id'=>3, 'title'=>'rust','posted_by'=>'ashraf', 'created_at'=>'2024-10-24 09:00:00']

        ];
        return view('test', ['posts'=>$allPosts]);
    }
}
