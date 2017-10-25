<?php
/*
Template Name: Home-kc
*/
get_header(); ?>

<div >

  <div id="container" class="clearfix row ">
    <div id="main" class="col-sm-12 clearfix pad0" role="main">
      <div class="bookpage">
        <ul class="paginate">
          <li><a class="active" href="#one"></a></li>
          <li><a class="" href="#second"></a></li>
          <li><a class="" href="#three"></a></li>
          <li><a class="" href="#four"></a></li>
          <li><a class="" href="#five"></a></li>
          <li><a class="" href="#six"></a></li>
          <li><a class="" href="#seven"></a></li>
<li><a class="" href="#eight"></a></li>
<li><a class="" href="#nine"></a></li>
<li><a class="" href="#ten"></a></li>
<li><a class="" href="#eleven"></a></li>
        </ul>
      </div>
    
    </div>
  </div>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
<div class="scrollsect textmiddle" data-section-name="eight">

  <div class="col-xs-12 pad0 containerfull  news latest-news">
    <div class="fltmrg blue-widget-section  tbl-sec containerfull ">
      <div class="col-sm-6 news-sec tbl-cell  wow fadeInUp animated" ata-wow-duration="800ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 400ms;"> <?php echo do_shortcode( '[cb_news_data]' ); ?>
        <div class="pull-right btn-sec"> <a href="/latest-news/" class="btn btn-org btn-lg">Read More</a> </div>
      </div>
      <div class="col-sm-6 success-sec tbl-cell wow fadeInUp animated" ata-wow-duration="800ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 400ms;"> <?php echo do_shortcode( '[cb_testimonials_data]' ); ?>
        <div class="pull-right btn-sec"> <a href="/success-stories/" class="btn btn-wht btn-lg">Read More</a></div>
      </div>
    </div>
  </div>
</div>
<div class="scrollsect " data-section-name="nine">
  <div class="col-xs-12 pad0 read-our-blog containerfull tbl-sec scroll-sec wow fadeIn animated" ata-wow-duration="800ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 400ms;" id="ins8" data-anchor="ins8">
    <div class="col-md-8 col-sm-7 col-xs-12 pad0 tbl-cell read-blog-img textmiddle" > </div>
    <div class="col-md-4 col-sm-5 col-xs-12 blog-txt textmiddle tbl-cell wow fadeInRight animated" ata-wow-duration="800ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 400ms;">
      <h3>Read Our</h3>
      <a href="https://blog.cloudbyte.com/" class="blog-link" target="_blank"><p>Blog</p></a>
    </div>
  </div>
</div>

<div class="scrollsect height-auto" data-section-name="ten">
  <div class="quote-txt bg-blue scroll-sec">
    <p>Our Select Customers</p>
  </div>

<div class="col-xs-12 clients pad70_0">
  <div class="col-lg-9 row fltmrg blue-widget-section max-wd npad">
    <div class="col-lg-12 row pad35tp fltmrg npad tt-sect max-wd">
      <?php dynamic_sidebar( 'logo-marg-sec' ); ?>
    </div>
  </div>
</div>

<div class="quote-txt bg-blue scroll-sec">
<p>Our Select Partner</p>
</div>

<div class="col-xs-12 clients pad70_0">
<div class="col-lg-9 row fltmrg blue-widget-section max-wd npad">
<div class="col-lg-12 row pad35tp fltmrg npad tt-sect max-wd">

<div style="display:flex;align-items:center;justify-content: center;"> 
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2015/12/vmware.jpg" alt="" height="100px" width="auto">
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2015/12/vmware.jpg" alt="" height="100px" width="auto">
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2015/12/vmware.jpg" alt="" height="100px" width="auto">
</div>
<div style="display:flex;align-items:center;justify-content: center;">
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2015/12/vmware.jpg" alt="" height="100px" width="auto">
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2015/12/vmware.jpg" alt="" height="100px" width="auto">
</div>

</div>
</div>
</div>



<div class="col-xs-12 clients pad70_0">
<div class="col-lg-9 row fltmrg blue-widget-section max-wd npad">
<div class="col-lg-12 row pad35tp fltmrg npad tt-sect max-wd">

<div style="display:flex;align-items:center;justify-content: space-around;"> 
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2017/10/partnerslogo-05.png" alt="" height="102px" width="auto">
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2017/10/partnerslogo-04.png" alt="" height="102px" width="auto">
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2017/10/partnerslogo-03.png" alt="" height="102px" width="auto">
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2017/10/partnerslogo-02.png" alt="" height="102px" width="auto">
  <img src="http://newstag.cloudbyte.com/wp-content/uploads/2017/10/partnerslogo-01.png" alt="" height="102px" width="auto">
</div>

</div>
</div>
</div>




<div class="col-xs-12 greenbg request pad70_0">
  <div class="col-lg-9 row fltmrg blue-widget-section max-wd npad">
    <div class="col-sm-4 text-left">
      <h2 >Request <br/>
        A Call Back.</h2>
      <p>Have an enquiry? Want us to call you back? Send us your details and, we'll get in touch as soon as we can.</p>
    </div>
    <div class="col-sm-8">
      <div class="row">
        <div id="success_msg"></div>
        <form action="role" id="contact_form" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <div class="col-sm-6">
          <div class="form-group">
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Name" autocomplete="off"/>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <input type="text" id="emailid" name="emailid" class="form-control" placeholder="Email" autocomplete="off"/>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
          <div class="form-group">
            <input type="text" id="phoneno" name="phoneno" class="form-control" placeholder="Phone" autocomplete="off"/>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <input type="text" id="message" name="message" class="form-control" placeholder="Message" autocomplete="off"/>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
          <p class="frm-fill"><strong>Please fill up below form</strong></p>
        </div>
        <div class="col-sm-6">
          <div class="form-group text-center">
            <button type="submit" class="btn btn-dblue btn-lg">Submit</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>



</div>


</div>
<!-- end #main -->
</div>
<!-- end #content --> 

<script src="http://www.jqueryscript.net/demo/Text-Scrolling-Plugin-for-jQuery-Marquee/jquery.marquee.js?v=3"></script> 
<script src="https://projects.lukehaas.me/scrollify/script/jquery.scrollify.js"></script> 
<script>
$(function() {





	$.scrollify({
		section : ".scrollsect",
updateHash: true,
		offset :-80,
		//setHeights: true,
		//interstitialSection:".header",
		interstitialSection:".header,.footer",

		
		before:function(i,panels) { var ref = panels[i].attr("data-section-name"); $(".paginate .active").removeClass("active"); $(".paginate").find("a[href=\"#" + ref + "\"]").addClass("active"); }, afterRender:function() { var paginate = "<ul class=\"paginate\">"; var activeClass = ""; $(".panel").each(function(i) { activeClass = ""; if(i===0) { activeClass = "active"; } paginate += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>"; }); paginate += "</ul>"; $(".home").append(paginate); /* Tip: The two click events below are the same: $(".paginate a").on("click",function() { $.scrollify.move($(this).attr("href")); }); */ $(".paginate a").on("click",$.scrollify.move); }
			});

 if($(window).width() < 767){$.scrollify.destroy();}

	});
			</script> 
<script>
     
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

     
      var player;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('ytplayer', {
          height: '390',
          width: '100%',
          playerVars : {
                autoplay : 0
            },
          videoId: 'AVkipnnIoc4'
        });
      }

    function isOnScreen() {

        var win = $(window);
    
       var viewport = {
           top : win.scrollTop(),
           left : win.scrollLeft()
       };
       viewport.right = viewport.left + win.width();
       viewport.bottom = viewport.top + win.height();
    
       var sectn = $("div.scrollsect[data-section-name='four']");
       var bounds = sectn.offset();
       bounds.right = bounds.left + sectn.outerWidth();
       bounds.bottom = bounds.top + sectn.outerHeight();
    
       return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    }

    $(window).scroll(function() {
	if(isOnScreen()) {
		player.playVideo();
	} else if(!isOnScreen()) {
		player.pauseVideo();
	}
    });

    </script> 
<script>
$(function(){

    $(".showdiv").mouseenter(function(){
        $('.menu-ss li:first-child a').css("background-color","#006bbf");
    });
  
   $(".showdiv").mouseleave(function(){
        $('.menu-ss li:first-child a').css("background-color","");
    });


   $("li.hoverr").mouseenter(function(){
        $('.showdiv').slideDown(500);
    });

      $(".showdiv").live("mouseenter",function(){
              $( '.showdiv' ).show(); 
        
       });
     $(".showdiv").live("mouseleave",function(){
              $( '.showdiv' ).hide(); 
        
       });


$('#mycrawler2').marquee({
 speed: 10000,
 gap: 0,
 delayBeforeStart: 0,
 direction: 'left',
 duplicated: true,
 pauseOnHover: true
});
});

			$ = jQuery;
			$(document).on("click", '.youtube', function() {
				  var src = $(this).attr('data-src')+'?autoplay=1';
				  $('#basicModal iframe').attr('src', src);
				  $('#myModalLabel').html($(this).attr('data-name'));
				  $('#basicModal').modal('show');
				  
				});
			$(document).on("click", '.close', function() {
				  $('#basicModal iframe').attr('src', '');
				  $('#basicModal').modal('hide');				  
				});
			$(document).keyup(function(a){if(a.keyCode=="27"){ $('.close').click(); }});
$('#follow-button #l').html("Follow @CloudByteInc");
</script> 
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" language="javascript">
$(document).ready(function () {
	$("#contact_form").validate(
	{
		onfocusout: false,
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				validator.errorList[0].element.focus();
			}
		},
		rules: {
			fullname: {required: true},
			emailid: {required: true, email: true},
			phoneno:{required: true},
			message: {required: true}
		},
		messages: {
			fullname: "Please enter your Name",
			emailid: "Please enter valid Email",
			phoneno: "Please enter your Phone",
			message: "Please enter a message"
		},
		submitHandler: function(form) { 
			var fullname = $('#fullname').val(); 
			var emailid = $('#emailid').val();
			var phoneno = $('#phoneno').val();
			var message = $('#message').val();
			$.ajax({
				type: 'POST',
				url : '/wp-admin/admin-ajax.php',
				data: {'action':'contactus_form',"fullname":fullname,"emailid":emailid,"phoneno":phoneno,"message":message},
				success: function(code)
				{ 
					if(code == 'success'){
						$('#fullname').val('');
						$('#emailid').val('');
						$('#phoneno').val('');
						$('#message').val('');
						$("#success_msg").html('<span style="color: #26f94e; font-weight: bold; float: left; width:100%; font-size: 16px; text-align: center; padding-bottom: 15px;">Thank you, your submission has been received!</span>');
					}else{
						$('#success_msg').html('<span style="color: red; font-size: 16px; font-weight: bold;float: left; width:100%;  text-align: center; padding-bottom: 15px;">Please try again later</span>');
					}
				}
			});
		}
	});
});
</script>
</div>

<?php get_footer(); ?>