<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    
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
        return view('tasks.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        
        $task = Task::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => Auth::id()
        ]);
        
        return redirect()->route('tasks.index');
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
        $this->authorize('update', $task);

        return view('tasks.edit',compact('task'));
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
        $this->authorize('update', $task);
        
        $task->update($request->all());
        return redirect()->route('tasks.index');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Task  $task
    * @return \Illuminate\Http\Response
    */
    public function destroy(Task $task)
    {
        $this->authorize('update', $task);
        
        $task->delete();
        
        return redirect()->route('tasks.index');
    }
}
