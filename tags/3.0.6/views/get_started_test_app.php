<div id="get_started_menu_config" class="tabs-panel">
    <h3>Test your app on your own device</h3>
    <div class="ml-col-twothirds">
        <img src="<?php echo MOBILOUD_PLUGIN_URL . '/assets/img/demo_app.png'; ?>" width="250" height="528" alt="Preview your own app" class="test_img"><br>
		
        <p>
		   Test-drive your native iOS and Android app on your device before signing up and publishing it.
        </p>
		
  
		
		<div>
        <p>To get a preview of your app, follow the steps below:</p>

			<ol style="text-align:left;">
				<li> <strong>Download the <a href="https://itunes.apple.com/us/app/mobiloud/id903667370?mt=8">Mobiloud app from the App Store</a></strong> or the <a href="https://play.google.com/store/apps/details?id=com.mobiloud.android"><strong>Android app from Google Play</strong></a> on your own device.</li>
				<li>Open the Mobiloud app and once it's loaded... </li>
				<li><strong>Shake your device</strong>. </li>
				<li>A screen named <strong>Preview your app</strong> will become accessible. </li>
				<li>Now <strong>enter your own site's URL</strong> and test your own app on your device!</li>
			</ol>
		
			<i>Hint: we've sent you an email with links to the apps, open it from your phone to make things easier.</i>
	        <?php if($loadDemo): ?>
	        <div class='update-nag'>
	            <p>
	                It looks like you could have some issues in getting a preview of your own app from your device (<?php echo $error_reason; ?>), 
	                but give it a try and should you have any problems, contact us at <a href="mailto:support@mobiloud.com">support@mobiloud.com</a>
	            </p>
	        </div>
	        <?php endif; ?>
			
		</div>
    </div>
</div>