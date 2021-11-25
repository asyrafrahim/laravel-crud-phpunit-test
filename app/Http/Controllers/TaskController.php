<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index',compact('tasks'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => Auth::id()
        ]);
    
        return redirect('tasks/'.$task->id);
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Task  $task
    * @return \Illuminate\Http\Response
    */
    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Task  $task
    * @return \Illuminate\Http\Response
    */
    public function edit(Task $task)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Task  $task
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Task $task)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Task  $task
    * @return \Illuminate\Http\Response
    */
    public function destroy(Task $task)
    {
        //
    }
}
