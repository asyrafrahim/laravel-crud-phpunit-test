@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="page-header">
                <h2>Task Detail</h2>
            </div>
            <div class="card">
                <div class="card-header">{{$task->title}}</div>
                
                <div class="card-body">
                    {{$task->description}}
                </div>
            </div>
            
            <div class='mt-3'>
                @can('update', $task)
                <a href="/tasks/{{$task->id}}/edit" class="btn btn-primary">Edit Task</a>
                <form style="float:right" method="POST" action="/tasks/{{$task->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                @endcan
            </div>
            
        </div>
    </div>
</div>
@endsection