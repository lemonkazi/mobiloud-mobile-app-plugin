<?php


function mobiloud_home_page()
{
	global $current_user;
	get_currentuserinfo();

	$root_url = network_site_url('/');
	$plugins_url = plugins_url();
	$appname = get_bloginfo('name');
	?>
	<script type="text/javascript">
		var _veroq = _veroq || [];

		_veroq.push(['init', {
		  api_key: '36bd54bf9afde30628102337cf6dc4306a6a212a',
		  development_mode: false 
		  // Turn this off when you decide to 'go live'.
		} ]);

		(function() {var ve = document.createElement('script'); ve.type = 'text/javascript'; ve.async = true; ve.src = '//getvero.com/assets/m.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ve, s);})();
	
	</script>
<link rel='stylesheet' href="<?php echo MOBILOUD_PLUGIN_URL.'/mobiloud.css';?>" type='text/css' media='all' />

	<div class="wrap">
		
		<p>&nbsp;</p>
		
		<div class=" ull">

			<!-- GENERAL -->
			<div class="ml_homepage_general">
				<div class='img_homepage'><img src="<?php echo MOBILOUD_PLUGIN_URL;?>/app_overview.png"></div>
				<div class="content center">
					<h1 class='bigtitle'>Turn your site into a stunning app</h1>
					<!-- <h2 class='subtitle'>Enter your details below to get started</h2> -->
					
					<!-- FORM -->
					<form class="form-horizontal formContact" target="_blank" action="<?php echo MOBILOUD_PLUGIN_URL;?>/form-mail.php" id="contactForm" method="post">
		  			<input type='hidden' value="<?php echo $root_url?>" name='root_url'/>
						<input type='hidden' value="<?php echo $plugins_url?>" name='plugins_url'/>
						<input type='hidden' value="<?php echo $appname?>" name='appname'/>

					  <div class="control-group inputGroup" >
						<div class="controls">
						  <label for="contactName">Your name</label>
						  <input type="text" id="contactName" name="contactName" placeholder="Enter your name" value='<?php echo $current_user->display_name; ?>' required>
						</div>
					  </div>
					  <div class="control-group inputGroup">
						<div class="controls">
						  <label for="email">Your email</label>
						  <input type="email" id="email" name="email" placeholder="Enter your email" value='<?php echo $current_user->user_email; ?>' required>
						</div>
					  </div>
					  <div class="control-group inputGroup last">
						<div class="controls">
						  <label for="website">Your website</label>
						  <input type="text" id="website" name="website" placeholder="Enter your website" value='<?php echo get_site_url(); ?>'>
						</div>
					  </div>
					  
						<input type="submit" value="Get Started and See A Demo" id="submitted" name="submitted" class="btn-submit">
	  			 					  
					</form>
					
					
					<br/><br/><br/><br/><br/>
					
					<small> By using Mobiloud you agree to Mobiloud's <a href="http://mobiloud.com/terms.php">terms of service</a> and <a href="https://www.iubenda.com/privacy-policy/435863/legal">privacy policy</span></a> </small>

				</div>
				
			</div>
		</div>

	</div>
	<script type="text/javascript">
	
		jQuery(document).ready(function($) {
			var email = jQuery("#email").val();
			var website = jQuery("#website").val();
			var name = jQuery("#contactName").val();

			_veroq.push(['user', {
			  id: email, 
			  email: email,
			  name: name,
			  website: website
			}]);

			_veroq.push(['track', 'new_app_init']); 
			
			jQuery("#contactForm").submit(function(e){

				var email = jQuery("#email").val();
				var website = jQuery("#website").val();
				var name = jQuery("#contactName").val();

				_veroq.push(['user', {
				  id: email, 
				  email: email,
				  name: name,
				  website: website
				}]);

				_veroq.push(['track', 'get_started']); 
			
				jQuery("#confirm-msg").attr("style", "display:block;");

			});
		});
	</script>


	<?php
}

?>