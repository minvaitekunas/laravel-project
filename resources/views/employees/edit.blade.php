@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update employee info</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Name :</label>
                            <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Surname: </label>
                            <input type="text" name="surname" class="form-control" value="{{ $employee->surname }}">
                        </div>
                        <div class="form-group">
                            <label for="">Email: </label>
                            <input type="email" name="email" class="form-control" value="{{ $employee->email }}">
                        </div>
                        <div class="form-group">
                            <label for="">Phone: </label>
                            <input type="number" name="phone" class="form-control" value="{{ $employee->phone }}">
                        </div>

                        <div class="form-group">
                            <label>Project: </label>
                            <select name="project_id" id="" class="form-control">
                                @foreach ($projects as $project)
                                <option value="{{ $project->id }}" @if($project->id == $employee->project_id) selected="selected" @endif>{{ $project->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
