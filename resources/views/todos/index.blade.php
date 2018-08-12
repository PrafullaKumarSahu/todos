@extends('master')
@section('content')
    <div class="todos-div">
        <h2 class="title">Todos</h2>
        <ol class="todos">
        @foreach($todos as $todo)
            <li>
                {{ $todo->todo }} 
                <a class="btn btn-xs btn-primary" href="{{ route('todos.show', ['todo' => $todo]) }}">View</a>
                @if(!$todo->completed)
                    <form class="btn btn-xs" method="POST" action="{{ route('todos.update', ['todo' => $todo]) }}">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <input type="submit" name="completed" value="Mark completed" class="btn btn-xs btn-info">
                    </form>
                @else
                    <span class="btn btn-xs btn-success">Completed</span>
                @endif
                <a class="btn btn-xs btn-info" href="{{ route('todos.edit', ['todo' => $todo]) }}">Edit</a>
                <form method="POST" action="{{route('todos.destroy', ['todo' => $todo])}}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <input type="hidden" name="todo" value="{{ $todo->id }}">
                    <input type="submit" name="delete" value="x" class="btn btn-xs btn-danger">
                </form>
            </li>
        @endforeach
        </ol>
    </div>
@stop