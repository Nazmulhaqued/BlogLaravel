@extends('master')
@section('main_content')
<div class="templatemo_post_wrapper">
@foreach($published_post as $single_published_post)
                <div class="templatemo_post">
                    <div class="post_title">
                    	<h3><?php echo $single_published_post->blog_title;?></h3></div>
                    <div class="post_info">
                    	Posted by <a href="http://www.templatemo.com" target="_blank"><?php echo $single_published_post->author_name;?></a><?php echo $single_published_post->created_at;?></a>
                    </div>
                    <div class="post_body">
                        <img src="{{asset('public/asset/images/templatemo_image_02.jpg')}}" alt="free css template" border="1" />
                      <p><?php echo $single_published_post->blog_short_description;?></p>
                      
                  </div>
                 
              <div class="post_comment">
                    	<a href="#">No Comment</a>
                    </div>
                </div>
                    @endforeach
                </div> <!-- End of a post-->
      @endsection()
                
                