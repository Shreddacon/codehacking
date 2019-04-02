@extends('layouts.admin')

@section('content')

	<h1>Create</h1>

	<form action="../../admin/users" method="POST" enctype="multipart/form-data">
	
    	<div class="form-group">
    		<label for="name">Name:</label>
    		<input type="text" name="name" class="form-control">
    	</div>
    	
    	<div class="form-group">
    		<label for="password">Password:</label>
    		<input type="password" name="password" class="form-control">
    	</div>
    	
    	<div class="form-group">
    		<label for="email">Email:</label>
    		<input type="email" name="email" class="form-control">
    	</div>
    	
    	<div class="form-group">
    		<label for="role_id">Role:</label>
    		<select name="role_id" class="form-control">
    		
    			<option value="0">Choose a Role</option>
    			
    			@foreach($roles as $role)

    				<option value="{{$role->id}}">{{$role->name}}</option>
    		
    			@endforeach
    		
    		</select>
    	</div>
    	
    	<div class="form-group">
    		<label for="is_active">Status:</label>
    		<select name="is_active" class="form-control">
    			<option value="1">Active</option>
    			<option value="0" selected="selected">Not Active</option>
    		</select>
    	</div>
    	
    	<div class="form-group">
    		<label for="photo_id">file:</label>
    		<input type="file" name="photo_id" class="form-control">
    	</div>
    	
    	
    	<div class="form-group">
    		<input type="submit" value="Create User" class="btn btn-primary">
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
    	</div>
    	
    </form>
    
    @include('includes.form_error')
    

@stop