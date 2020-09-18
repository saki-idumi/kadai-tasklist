@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} Page of the task list details</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>Tasklist</th>
            <td>{{ $tasklist->content }}</td>
        </tr>
    </table>
    {{-- Edit task list --}}
    {!! link_to_route('tasklists.edit', 'Edit task list', ['tasklist' => $tasklist->id], ['class' => 'btn btn-light']) !!}

    {{-- Delete --}}
    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection