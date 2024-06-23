@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <h5 class="card-header">
                    <a href="{{ route('todo.create') }}" class="btn btn-sm btn-outline-primary">Add Item</a>
                </h5>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover table-borderless">
                        <thead>
                            <th scope="col">Task</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            @forelse ($todos as $todo)
                            <tr>
                                @if ($todo->status)
                                    <td><s>{{$todo->title}}</s></td>
                                @else
                                    <td>{{$todo->title}}</td>
                                @endif
                                <td>
                                    <a href="{{route('todo.edit', $todo->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                    <a href="{{route('todo.destroy', $todo->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td>No Tasks</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
