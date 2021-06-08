<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Tasks::all()->toArray();
        return array_reverse($tasks);
    }
    public function store(Request $request)
    {
        $task = new Tasks([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'update' => 0
        ]);
        $task->save();
        return response()->json('Task created!');
    }
    public function show($id)
    {
        $task = Tasks::find($id);
        return response()->json($task);
    }
    public function update($id, Request $request)
    {
        $task = Tasks::find($id);
        $task->update($request->all());
        return response()->json('Task updated!');
    }
    public function destroy($id)
    {
        $task = Tasks::find($id);
        $task->delete();
        return response()->json('Task deleted');
    }
}
