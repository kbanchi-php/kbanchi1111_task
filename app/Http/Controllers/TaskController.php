<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $data = [
            'tasks' => $tasks,
        ];
        return view('tasks.index', $data);
    }

    public function show($id)
    {
        $task = Task::find($id);
        $data = [
            'id' => $id,
            'task' => $task,
        ];
        return view('tasks.show', $data);
    }

    public function edit($id)
    {
        $task = Task::find($id);
        $data = [
            'id' => $id,
            'task' => $task,
        ];
        return view('tasks.edit', $data);
    }

    public function store(TaskRequest $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();

        return redirect('/tasks');
    }

    public function update(TaskRequest $request, $id)
    {
        $task = Task::find($id);
        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();

        return redirect('/tasks');
    }

    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        return redirect('/tasks');
    }
}
