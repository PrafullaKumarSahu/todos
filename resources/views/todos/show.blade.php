@extends('master')
@section('content')
    <div class="todos-div">
        <div class="row">
            <div class="col-lg-12">
                {{ $todo->todo }}
                <a class="btn btn-xs btn-info" href="{{ route('todos.edit', ['todo' => $todo]) }}">Edit</a>
                @if(!$todo->completed)
                    <form class="btn btn-xs" method="POST" action="{{ route('todos.update', ['todo' => $todo]) }}">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <input type="submit" name="completed" value="Mark completed" class="btn btn-xs btn-info">
                    </form>
                @else
                    <span class="btn btn-xs btn-success">Completed</span>
                @endif
            </div>
        </div>
    </div>
@stop