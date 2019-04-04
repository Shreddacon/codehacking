@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_user')

	<p class="bg-danger">{{session('deleted_user')}}</p>

@endif


<h1>Edit User</h1>

<div class="row">

    <div class="col-sm-3">
    	
    	<img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    
    </div>
    	
    <div class="col-sm-9">
    
    	<form action="../../users/{{$user->id}}" method="post" enctype="multipart/form-data">
    	
    		{{ csrf_field() }}
    		{{ method_field('PUT') }}
    	
        	<div class="form-group">
        		<label for="name">Name:</label>
        		<input type="text" name="name" class="form-control" value="{{$user->name}}">
        	</div>
        	
        	<div class="form-group">
        		<label for="password">Password:</label>
        		<input type="password" name="password" class="form-control"">
        	</div>
        	
        	<div class="form-group">
        		<label for="email">Email:</label>
        		<input type="email" name="email" class="form-control" value="{{$user->email}}">
        	</div>
        	
        	<div class="form-group">
        		<label for="role_id">Role:</label>
        		<select name="role_id" class="form-control">
        		
        			<option value="0">Choose a Role</option>
        			
        			@foreach($roles as $role)
    
        				<option value="{{$role->id}}" {{$role->id == $user->role->id ? 'selected="selected"' : ''}}>{{$role->name}}</option>
        		
        			@endforeach
        		
        		</select>
        	</div>
        	
        	<div class="form-group">
        		<label for="is_active">Status:</label>
        		<select name="is_active" class="form-control">
        			<option value="1" {{$user->is_active == 1 ? 'selected="selected"' : ''}}>Active</option>
        			<option value="0" {{$user->is_active == 0 ? 'selected="selected"' : ''}}>Not Active</option>
        		</select>
        	</div>
        	
        	<div class="form-group">
        		<label for="photo_id">Photo:</label>
        		<input type="file" name="photo_id">
        	</div>
        	
        	
        	<div class="form-group">
        		<input type="submit" value="Update User" class="btn btn-primary col-sm-2">
        	</div>
        	
        </form>
        	
        <form action="../../users/{{$user->id}}" method="post" enctype="multipart/form-data">
        	
        	{{ csrf_field() }}
    		{{ method_field('DELETE') }}

        	<div class="form-group">
        		<input type="submit" value="Delete User" class="btn btn-danger col-sm-2">
        	</div>
        	
        </form>
        	
    </div>

</div>

<div class="row">

	@include('includes.form_error')
	
</div>


@stop