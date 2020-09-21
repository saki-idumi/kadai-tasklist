@extends('layouts.app')

@section('content')

    <h1>Tasklist</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Task</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    {{-- Page of Tasklist detailsページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- Create a task listページへのリンク --}}
    {!! link_to_route('tasks.create', 'Create a task list', [], ['class' => 'btn btn-primary']) !!}

    
@endsection