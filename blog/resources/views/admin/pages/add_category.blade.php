@extends('admin.admin_master')
@section('admin_main_content')
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Advanced form Validation</h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="widget-body form">
                <!-- BEGIN FORM-->
                <h2 style="color:green; align:center;">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo $message;
                            unset($message);
                        }
                    ?>
                </h2>
                
                {!! Form::open(['url' => '/save-category', 'method' => 'post']) !!}
                    <div class="control-group ">
                        <label for="firstname" class="control-label">Category Name</label>
                        <div class="controls">
                            <input class="span6 " id="firstname" name="category_name" type="text">
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="lastname" class="control-label">Category Description</label>
                        <div class="controls">
                            <input class="span6 " id="lastname" name="category_description" type="text">
                        </div>
                    </div>  
                    <div class='control-group'>
                        <label for="lastname" class="control-label">Status</label>
                        <div class="controls">
                            <select class="span6" data-placeholder="Select Status" tabindex="-1" id="sel4H3" name="publication_status">
                                <option value="">Select Status</option>
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button class="btn btn-success" type="submit">Save</button>
                        <button class="btn" type="button">Cancel</button>
                    </div>

             {!! Form::close() !!}
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>
@endsection