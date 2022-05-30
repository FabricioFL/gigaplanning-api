<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    
    public function getById(Request $request, string $id) : mixed
    {
        return [];
    }

    public function store(Request $request, string $id) : mixed
    {   
        $payload = [
            'author' => $request->input('author'),
            'task' => $request->input('task'),
            'description' => $request->input('description')
        ];
        if($payload['author'] != null && $payload['task'] != null && $payload['description'] != null)
        {
            Task::create($payload);
            return ['message' => 'created'];
        }
        return ['message' => 'wrong entry'];
    }

    public function updateById(Request $request, string $id) : mixed
    {
        return [];
    }

    public function deleteById(Request $request, string $id) : mixed
    {
        return [];
    }

}
