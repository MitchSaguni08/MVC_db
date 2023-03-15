@extends('teams.layout')
@section('content')

    <div class="section index">
    
        <h1>Team-Member Management</h1>
        <hr>
        <div class="top-row">
            <div class="button pull-left">
                <a class="btn btn-info" href="{{ route('homepage.index') }}"> Home</a>
            </div>
            <div class="button pull-left">
                <a class="btn btn-success" href="{{ route('teams.create') }}"> Add new member</a>
            </div>
    
        </div>
        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if($teams->isEmpty())
            <p>No teams found.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Image</th>
                            <th>Bio</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{ $team->id }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->position }}</td>
                                <td>{{ $team->image }}</td>
                                <td>{{ $team->bio }}</td>
                                <td>
                                    <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('teams.edit', $team->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $teams->links() }}
        @endif
    </div>

@endsection