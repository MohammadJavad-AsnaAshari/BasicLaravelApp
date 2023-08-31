<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        1 => [
            "title" => "Intro to Laravel",
            "content" => "This is a short intro to Laravel",
            "is_new" => true,
            "has_comments" => true
        ],
        2 => [
            "title" => "Intro to PHP",
            "content" => "This is a short intro to PHP",
            "is_new" => false,
            "has_comments" => true
        ],
        3 => [
            "title" => "Intro to SQL",
            "content" => "This is a short intro to SQL",
            "is_new" => false,
            "has_comments" => false
        ]
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = $this->posts;
        return view("posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_if(!isset($this->posts[$id]), 404);
        return view("posts.show", ["post" => $this->posts[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}