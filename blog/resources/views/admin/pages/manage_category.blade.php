@extends('admin.admin_master')

@section('admin_main_content')
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN BASIC PORTLET-->
        <div class="widget orange">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Category Table</h4>
            <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
            </span>
            </div>
            <div class="widget-body">
                <table class="table table-striped table-bordered table-advance table-hover">

                    <thead>
                    <tr>
                        <th><i class="icon-bullhorn"></i> Category ID</th>
                        <th class="hidden-phone"><i class="icon-question-sign"></i> Category Name</th>
                        <th><i class=" icon-edit"></i> Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($all_category_info as $all_category_info) {
                    ?>
                    <tr>
                        <td><a href="#">{{$all_category_info->category_id}}</a></td>
                        <td class="hidden-phone">{{$all_category_info->category_name}}</td>
                        
                        <td>
                            <?php if($all_category_info->publication_status==1){
                                    echo '<span class="label label-success label-mini">Published</span>';
                                } else{
                                    echo '<span class="label label-important label-mini">Un Published</span> ';
                                }


                                ?>
                            
                            
                        </td>
                        <td>
                        <?php if($all_category_info->publication_status==1){?>

                              <button class="btn btn-danger"><a style="color:#fff;" href="{{URL::to('/unpublish-category/'.$all_category_info->category_id)}}"><i class="icon-thumbs-up"></i></a></button>

                            <?php } else{?>

                            <button class="btn btn-success"><a style="color:#fff;" href="{{URL::to('/publish-category/'.$all_category_info->category_id)}}"><i class="icon-thumbs-up"></i></a></button>

                            <?php }?>

                            <button class="btn btn-success"><a style="color:#fff;" href="{{URL::to('edit-category/'.$all_category_info->category_id)}}"><i class="icon-pencil"></i></button>

                            <button class="btn btn-danger"><a style="color:#fff;" href="{{URL::to('/delete-category/'.$all_category_info->category_id)}}" onclick="return checkDelete()"><i class="icon-trash "></i></a></button>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END BASIC PORTLET-->
    </div>
</div>

@endsection