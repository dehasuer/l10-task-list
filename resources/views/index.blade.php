@extends('layouts.app')

@section('title' , 'Tasks')

@section('content')
    <div>
        <a href="{{ route('tasks.create') }}">Add Task</a>
    </div>
<h2>The list of tasks</h2>
<div>
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show' , ['task' => $task->id]) }}">{{$task->title}}</a>
            </div>
        @empty
            <div>There are no tasks</div>
        @endforelse

    @if($task->count())
        <nav>
            {{$tasks->links()}}
        </nav>
    @endif

</div>
@endsection
