@extends('master')
@section('content')
    <div class="todos-div">
        <h2 class="title">Todos</h2>
        <ol class="todos">
        @foreach($todos as $todo)
            <li>
                {{ $todo->todo }} 
                @if(!$todo->completed)
                    <a class="btn btn-xs btn-success" href="/">Completed</a>
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