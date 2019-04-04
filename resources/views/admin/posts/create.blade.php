@extends('layouts.admin')

@section('content')

<h1>Create Posts</h1>

<div class="row">

    <form action="../../admin/posts" method="POST" enctype="multipart/form-data">
    
    	<div class="form-group">
    		<label for="title">Title:</label>
    		<input type="text" name="title" class="form-control">
    	</div>
    	
    	<div class="form-group">
    		<label for="category_id">Category:</label>
    		<select name="category_id" class="form-control">
    		
    			<option value="0">Choose a Category</option>
    			
    			<option value="1">PHP</option>
    			<option value="2">Javascript</option>
    		
    		</select>
    	</div>
    	
    	<div class="form-group">
    		<label for="photo_id">Photo:</label>
    		<input type="file" name="photo_id">
    	</div>
    	
    	<div class="form-group">
    		<label for="body">Body:</label>
    		<textarea name="body" class="form-control" rows="5"></textarea>
    	</div>
    	
    	<div class="form-group">
    		<input type="submit" value="Create Post" class="btn btn-primary">
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
    	</div>
    	
    </form>

</div>

<div class="row">

	@include('includes.form_error')

</div>

@stop