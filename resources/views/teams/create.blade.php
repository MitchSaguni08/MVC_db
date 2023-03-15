@extends('teams.layout')
@section('content')

    <div class="section create">
 
        <h1>Add New Team Member</h1>
        <hr>
      
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('teams.store') }}" method="POST">
            @csrf

            <div class="form-group row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>name</strong>
                        <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') }}" autofocus>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>position</strong>
                        <input type="text" name="position" class="form-control" placeholder="position" value="{{ old('position') }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image</strong>
                        <input type="text" name="image" class="form-control" placeholder="Image location" value="{{ old('image') }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>bio</strong>
                        <textarea  rows="6" type="text" name="bio" class="form-control" placeholder="Bio" value="{{ old('bio') }}"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('teams.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection