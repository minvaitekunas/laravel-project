@extends('layouts\app')
@section('content')
    

<card-body>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
           
            <th>Actions</th>
            
        </tr>
        @foreach ($projects as $project)
            
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->title }}</td>
       
    
            <td>
                <form action={{ route('project.destroy', $project->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('project.edit', $project->id) }}>Update</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>


        </tr>

        @endforeach

        
    </table>
    <div>
        <a href="{{ route('project.create') }}" class="btn btn-success">Add project</a>
    </div>
</card-body>
@endsection