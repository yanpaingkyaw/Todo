<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index() {
        $data = [
            ["id" => 1, "title" => "my task1" ],
            ["id" => 1, "title" => "my task2" ],
        ];

        return view('todo/index', [
            'tasks' => $data
        ]);
    }
}
