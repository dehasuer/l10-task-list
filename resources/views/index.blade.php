@extends('layouts.app')

@section('title' , 'Tasks')

@section('content')
<h2>The list of tasks</h2>
<div>
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show' , ['id' => $task->id]) }}">{{$task->title}}</a>
            </div>
        @empty
            <div>There are no tasks</div>
        @endforelse

</div>
@endsection
