@extends('layouts/app')
@section('content')
    

<card-body>
    <table class="table">
        <tr>
        
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Project</th>
            <th>Actions</th>
            

            
        </tr>
        @foreach ($employees as $employee)
            
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->surname }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->project->title }}</td>
            <td>
                <form action={{ route('employees.destroy', $employee->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('employees.edit', $employee->id) }}>Update</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>

        @endforeach

     
    </table>
    <div>
        <a href="{{ route('employees.create') }}" class="btn btn-success">Add new employee</a>
    </div>
</card-body>
@endsection