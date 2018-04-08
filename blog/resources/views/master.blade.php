<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Old Blog Template - Free CSS Layout</title>
<meta name="keywords" content="free css layout, old blog template, CSS, HTML" />
<meta name="description" content="Old Blog Template - free website template provided by TemplateMo.com" />
<link href="{{asset('public/asset/templatemo_style.css')}}" rel="stylesheet" type="text/css" />
<!--  Designed by w w w . t e m p l a t e m o . c o m  -->
<link rel="stylesheet" type="text/css" href="{{asset('public/asset/tabcontent.css')}}" />
<script type="text/javascript" src="{{asset('public/asset/tabcontent.js')}}">
/***********************************************
* Tab Content script v2.2- � Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
</head>
<body>

	<div id="templatemo_header_panel">
    	<div id="templatemo_title_section">
				<h1>OLD BLOG</h1>
	  Your tagline goes here</div>
    </div> <!-- end of templatemo header panel -->
    
    <div id="templatemo_menu_panel">
    	<div id="templatemo_menu_section">
            <ul>
                <li><a href="{{URL::to('/')}}"  class="current">Home</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Archives</a></li>  
                <li><a href="#">About</a></li> 
                <li><a href="{{URL::to('/contact')}}">Contact</a></li>                     
            </ul> 
		</div>
    </div> <!-- end of menu -->
    
	<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
				
                @yield('main_content')
                
            </div> <!-- end of content left -->
        
            <div id="templatemo_content_right">
            
            	<div class="templatemo_right_section">
					<div class="tag_section">
                        <ul id="countrytabs" class="shadetabs">
                            <li><a href="#" rel="search" class="selected">Search</a></li>                
                            <li><a href="#" rel="category">Category</a></li>
                            <li><a href="#" rel="archive">Archive</a></li>
                        </ul>
					</div>
				
                    <div class="tabcontent_section">
                        <div id="search" class="tabcontent">
                            <form method="get" action="#">
                                <input class="inputfield" name="searchkeyword" type="text" id="searchkeyword"/>
                                <input type="submit" name="submit" class="button" value="Search" />
                            </form>                    
                        </div>
					
                        <div id="category" class="tabcontent">
                        <?php
                            $all_category = DB::table('category')
                                    ->where('publication_status',1)
                                    ->get();
                        ?>
                            <ul>
                            @foreach($all_category as $vcategory)
                                <li><a href="#">{{$vcategory->category_name}}</a></li>
                            @endforeach
                            </ul>

                        </div>
		            
                        <div id="archive" class="tabcontent">
                            <ul>
                                <li><a href="#">January 2049</a></li>
                                <li><a href="#">December 2048</a></li>
                                <li><a href="#">November 2048</a></li>
                                <li><a href="#">October 2048</a></li>
                                <li><a href="#">September 2048</a></li>
                            </ul>                         
                        </div>
					</div>

					<script type="text/javascript">
                    
                    var countries=new ddtabcontent("countrytabs")
                    countries.setpersist(true)
                    countries.setselectedClassTarget("link") //"link" or "linkparent"
                    countries.init()
                    
                    </script> <!--- end of tag -->
                </div>
            	
                
                <div class="templatemo_right_section">
                	<h2>Popular Posts</h2>
					<ul>
                        <li><a href="#">Quisque dictum pharetra neque</a></li>
                        <li><a href="#">Aliquam pretium porta odio</a></li>
                        <li><a href="#">Maecenas adipiscing</a></li>
                        <li><a href="#">Vivamus vestibulum condimentum</a></li>
                      <li><a href="#">Cum sociis natoque</a></li>
                    </ul>    
                </div>
                
                <div class="templatemo_right_section">
                	<h2>Archives</h2>
					<ul>
                        <li><a href="#">January 2049</a></li>
                        <li><a href="#">December 2048</a></li>
                        <li><a href="#">November 2048</a></li>
                        <li><a href="#">October 2048</a></li>
                        <li><a href="#">September 2048</a></li>
                    </ul>  
                </div>
                
                <div class="templatemo_right_section">
	                <h2>Recent Comments</h2>
                	<ul>	
                        <li>Lorem Ipsum on <a href="#">Donec mollis aliquet</a></li>
                        <li>Consectetuer on <a href="#">Suspendisse a nibh</a></li>
                        <li>Sed on <a href="#">Pellentesque vitae magna</a></li>
                        <li>Vitae Neque on <a href="#">Nunc blandit orci sit amet</a></li>
                      <li>Donec Mollis on <a href="#">Maecenas adipiscing</a></li>
                  </ul>
                </div>
                
                <div class="templatemo_right_section">
                	<h2>Search</h2>
					<form method="get" action="#">
                        <input class="inputfield" name="keyword" type="text" id="keyword"/>
                        <input type="submit" name="submit" class="button" value="Search" />
                    </form>
                </div>
                
            </div> <!-- end of right content -->
	    </div> <!-- end of content -->
    </div> <!-- end of content container -->

	<div id="templatemo_bottom_panel">
    	<div id="templatemo_bottom_section">
            <div class="templatemo_bottom_section_content">
                <h3>Partner Links</h3>
                <ul>
                    <li><a href="#">Mauris congue felis at nisi</a></li>
                    <li><a href="#">Donec mattis rhoncus mi</a></li>
                    <li><a href="#">Maecenas adipiscing</a></li>
                    <li><a href="#">Nunc blandit orci</a></li>
                    <li><a href="#">Cum sociis natoque</a></li>
                </ul>
            </div>
            
            <div class="templatemo_bottom_section_content">
                <h3>Other Links</h3>
                 <ul>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">About</a></li>                 
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            
            <div class="templatemo_bottom_section_content">
                <h3>About this blog</h3>
                <p>Vivamus laoreet pharetra eros. In quam nibh, placerat ac, porta ac, molestie non, purus. Curabitur sem ante, condimentum non, cursus quis, eleifend non, libero. Nunc a nulla.</p>
                <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a> 
          </div>
            
        </div>
    </div> <!-- end of templatemo bottom panel -->
    
    <div id="templatemo_footer_panel">
    	<div id="templatemo_footer_section">
			Copyright � 2048 <a href="#">Your Company Name</a> | 
            <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div>
    </div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>