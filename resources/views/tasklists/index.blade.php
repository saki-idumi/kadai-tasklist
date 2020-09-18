@extends('layouts.app')

@section('content')

    <h1>Tasklist</h1>

    @if (count($tasklists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tasklist</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasklists as $tasklist)
                <tr>
                    {{-- Page of Tasklist detailsページへのリンク --}}
                    <td>{!! link_to_route('tasklists.show', $tasklist->id, ['tasklist' => $tasklist->id]) !!}</td>
                    <td>{{ $tasklist->content }}</td>
                </tr>
    @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- Create a task listページへのリンク --}}
    {!! link_to_route('tasklists.create', 'Create a task list', [], ['class' => 'btn btn-primary']) !!}

    
@endsection