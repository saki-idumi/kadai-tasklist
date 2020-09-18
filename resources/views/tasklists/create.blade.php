@extends('layouts.app')

@section('content')

    <h1>Task list new page</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'Tasklist:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection