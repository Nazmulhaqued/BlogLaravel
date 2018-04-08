@extends('admin.admin_master')

@section('admin_main_content')
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN BASIC PORTLET-->
        <div class="widget orange">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Blog Table</h4>
            <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
            </span>
            </div>
            <div class="widget-body">
                <table class="table table-striped table-bordered table-advance table-hover">

                    <thead>
                    <tr>
                        <th><i class="icon-bullhorn"></i> Blog ID</th>
                        <th class="hidden-phone"><i class="icon-question-sign"></i> Blog Title</th>
                        <th><i class=" icon-edit"></i> Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($all_blog_info as $all_blog_info_single) {
                    ?>
                    <tr>
                        <td><a href="#">{{$all_blog_info_single->blog_id}}</a></td>
                        <td class="hidden-phone">{{$all_blog_info_single->blog_title}}</td>
                        
                        <td>
                            <?php if($all_blog_info_single->publication_status==1){
                                    echo '<span class="label label-success label-mini">Published</span>';
                                } else{
                                    echo '<span class="label label-important label-mini">Un Published</span> ';
                                }


                                ?>
                            
                            
                        </td>
                        <td>
                        <?php if($all_blog_info_single->publication_status==1){?>

                              <button class="btn btn-danger"><a style="color:#fff;" href="{{URL::to('/unpublish-category/'.$all_blog_info_single->category_id)}}"><i class="icon-thumbs-up"></i></a></button>

                            <?php } else{?>

                            <button class="btn btn-success"><a style="color:#fff;" href="{{URL::to('/publish-category/'.$all_blog_info_single->category_id)}}"><i class="icon-thumbs-up"></i></a></button>

                            <?php }?>

                            <button class="btn btn-success"><a style="color:#fff;" href="{{URL::to('edit-category/'.$all_blog_info_single->category_id)}}"><i class="icon-pencil"></i></button>

                            <button class="btn btn-danger"><a style="color:#fff;" href="{{URL::to('/delete-category/'.$all_blog_info_single->category_id)}}" onclick="return checkDelete()"><i class="icon-trash "></i></a></button>
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