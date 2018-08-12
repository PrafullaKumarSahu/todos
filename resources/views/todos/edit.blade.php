@extends('master')
@section('content')
    <div class="todos-div">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{route('todos.update', ['todo' => $id])}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="hidden" name="id" value="{{ $id }}" />
                    <div class="form-group">
                        <input type="text" name="todo" class="form-control input-lg" placeholder="Create todo" value="{{ $todo }}" />
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        </ol>
    </div>
@stop