 <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
      
       <!--  <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/">Home</a> </li> -->
         <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/about">About</a> </li>
        <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/artists">Artists</a> </li>
        <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/tour">Tour</a> </li>
        <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/press-release">Releases</a> </li>
       </li><li>
       <form role="search" method="get" id="searchform" class="searchform navbar-form" action="<?php echo get_site_url() ; ?>"> 
<!-- <label class="screen-reader-text" for="s">Search for:</label>  -->
 <div class="input-group">
<input type="text" value="" name="s" id="s" placeholder="Search Artists" class="form-control search-custom-form"  /> 
<input type="hidden" name="post_type" value="artist" /> 
    <div class="input-group-btn">
                <button class="btn btn-default search-custom-button" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
</div>
</form>


    
        </li>
<div class="social-info">
        <li><a href="http://www.twitter.com/tayfpr" target="_blank"><span class="screen-reader-text">twitter</span></a></li>
        <li><a href="https://www.facebook.com/tellallyourfriendspr/" target="_blank"><span class="screen-reader-text">facebook</span></a></li>
        <li><a href="https://www.instagram.com/tayfpr/" target="_blank"><span class="screen-reader-text">instagram</span></a></li>
</div>
      </ul>
    </div>