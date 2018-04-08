
@extends('admin.admin_master')
@section('admin_main_content')

<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN SAMPLE FORMPORTLET-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Sample Form </h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>

            <div class="widget-body">
            	<h3>
            		<?php
            		$message = Session::get('message');
            		if($message){
            			echo $message;
            			Session::put('message','');
            		}
            		?>
            	</h3>
                <!-- BEGIN FORM-->
                {!! Form::open(['url' => '/save-post', 'method' => 'post']) !!}
                <div class="control-group">
                    <label class="control-label">Post Title</label>
                    <div class="controls">
                        <input type="text" name="post_title" class="span8 ">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Category Name</label>
                    <div class="controls">
                        <select class="span6 " name="category_id" data-placeholder="Choose a Category" tabindex="1">
                        @foreach($all_published_category as $all_published_category_single)
                            <option value="{{$all_published_category_single->category_id}}">{{$all_published_category_single->category_name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Post Image</label>
                    <div class="controls">
                        <input type="file" name="blog_image" class="default">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Short Description</label>
                    <div class="controls">
                    <textarea class="span8 " name="blog_short_description"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Long Description</label>
                    <div class="controls">
                    <textarea class="span8 " name="blog_long_description"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Author Name</label>
                    <div class="controls">
                    <input type="text" name="" value="{{Session::get('admin_name')}}" class="span8 "> 
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Publication Status</label>
                    <div class="controls">
                        <select class="span6 " name="publication_status" data-placeholder="Choose a Category" tabindex="1">
                            <option value="">Select...</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublish</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
             {!! Form::close() !!}   
                </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>
       @endsection;