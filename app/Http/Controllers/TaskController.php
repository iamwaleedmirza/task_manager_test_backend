<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return response()->json(TaskResource::collection($tasks));
    }

    /**
     * Store a newly created resource.
     */
    public function store(TaskStoreRequest $request)
    {
        $validated_data = $request->validated();
        // Create a new task
        $task = Task::create($validated_data);
        return response()->json(TaskResource::make($task));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return response()->json(TaskResource::make($task));
    }

    /**
     * Update the specified resource.
     */
    public function update(TaskUpdateRequest $request, Task $task)
    {
        $validated_data = $request->validated();
        $task->update($validated_data);
        return response()->json(TaskResource::make($task));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json('Task deleted successfully');
    }
    public function upcoming ()
    {
        $tasks = Task::whereBetween('due_date', [today(),today()->addDays(7)])->get();
        return response()->json(TaskResource::collection($tasks));
    }
}
