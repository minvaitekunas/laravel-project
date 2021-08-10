@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create project:</div>
               <div class="card-body">
                   <form action="{{ route('project.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Title: </label>
                           <input type="text" name="title" class="form-control">
                       </div>
                       
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
