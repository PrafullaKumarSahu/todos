@extends('master')
@section('content')
    <div class="todos-div">
        <div class="row">
            <div class="col-lg-12">
                {{ $todo->todo }}
                <a class="btn btn-xs btn-info" href="{{ route('todos.edit', ['todo' => $todo]) }}">Edit</a>
                @isset($todo->completed)
                    <span class="status label label-success">Completed</span>
                @endisset
            </div>
        </div>
    </div>
@stop