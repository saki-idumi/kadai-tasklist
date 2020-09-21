@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} Page of the task list details</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    {{-- Edit task list --}}
    {!! link_to_route('tasks.edit', 'Edit task list', ['task' => $task->id], ['class' => 'btn btn-light']) !!}

    {{-- Delete --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection