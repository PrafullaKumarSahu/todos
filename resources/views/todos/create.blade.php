@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="{{route('todos.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="todo" class="form-control input-lg" placeholder="Create todo" />
                </div>
                }
            </form>
        </div>
    </div>
@stop