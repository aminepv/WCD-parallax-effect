<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>WebCodo Demo | How to Create a Simple Parallax Effect Using CSS and jQuery</title>

        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/example.css">
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

        <script type="text/javascript">
			$(document).ready(function() {
				$(window).scroll(function(){
					$('*[class^="prlx"]').each(function(r){
						var pos = $(this).offset().top;
						var scrolled = $(window).scrollTop();
				    	$('*[class^="prlx"]').css('top', -(scrolled * 0.5) + 'px');			
				    });
				});
			});
		</script>

    </head>
<body>
	
	
	<div class="webcodo-top" style="position:fixed; z-index:9999" >
        <a href="http://www.webcodo.net/how-to-create-a-simple-parallax-effect-using-css-and-jquery">
            <div class="wcd wcd-tuto"> < Come back to the tuto page</div>
        </a>
        <a href="http://webcodo.net">
            <div class="wcd wcd-logo">WEBCODO</div>
        </a>
        <div class="wcd"></div>
    </div><!-- /webcodo-top  {remove it, you don't need it } -->


 	
 	<section class="section-one">
 		<div class="prlx-1"></div>
 		<h2>FIRST PARALLAX EFFECT IN .prlx-1</h2>
 	</section>
 	<section class="section-two">
 		<p>
 		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia venenatis tempus. Phasellus magna felis, luctus sit amet condimentum eu, tincidunt vel magna. Nulla euismod dolor purus, vel dapibus turpis viverra sed. Quisque nec ultrices enim. Nunc tincidunt vel lacus a egestas. Praesent a erat dictum, laoreet nunc vel, elementum augue. Duis convallis at sem in malesuada. Quisque ut turpis nec quam tempus elementum in non lacus. Maecenas eleifend mi quis ultrices consectetur. Curabitur rhoncus in velit tempor gravida. Etiam sit amet faucibus nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam, nulla sed dapibus malesuada, sapien tortor molestie ligula, ut auctor sapien arcu convallis lacus.

		Sed fringilla feugiat mi non placerat. Etiam sit amet quam bibendum, imperdiet nulla et, ornare felis. Sed iaculis molestie dui, sit amet iaculis tortor ultricies id. Maecenas non diam enim. Proin nisi augue, interdum non porta quis, placerat quis nulla. Nulla non ligula ultrices, sollicitudin dolor sed, euismod felis. Praesent sodales felis non nulla imperdiet egestas. Etiam vel erat elementum, dictum augue sed, congue justo. Ut volutpat ipsum purus, sit amet posuere eros lobortis in. Aenean non tortor id tellus malesuada suscipit sed et leo.
		</p>
 	</section>
 	<section class="section-three">
 		<div class="prlx-2"></div>
 		<h2>SECOND PARALLAX EFFECT IN .prlx-2</h2>
 	</section>
 	<section class="section-two">
 		<p>
 		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia venenatis tempus. Phasellus magna felis, luctus sit amet condimentum eu, tincidunt vel magna. Nulla euismod dolor purus, vel dapibus turpis viverra sed. Quisque nec ultrices enim. Nunc tincidunt vel lacus a egestas. Praesent a erat dictum, laoreet nunc vel, elementum augue. Duis convallis at sem in malesuada. Quisque ut turpis nec quam tempus elementum in non lacus. Maecenas eleifend mi quis ultrices consectetur. Curabitur rhoncus in velit tempor gravida. Etiam sit amet faucibus nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam, nulla sed dapibus malesuada, sapien tortor molestie ligula, ut auctor sapien arcu convallis lacus.

		Sed fringilla feugiat mi non placerat. Etiam sit amet quam bibendum, imperdiet nulla et, ornare felis. Sed iaculis molestie dui, sit amet iaculis tortor ultricies id. Maecenas non diam enim. Proin nisi augue, interdum non porta quis, placerat quis nulla. Nulla non ligula ultrices, sollicitudin dolor sed, euismod felis. Praesent sodales felis non nulla imperdiet egestas. Etiam vel erat elementum, dictum augue sed, congue justo. Ut volutpat ipsum purus, sit amet posuere eros lobortis in. Aenean non tortor id tellus malesuada suscipit sed et leo.
		</p>
 	</section>


</body>
</html>