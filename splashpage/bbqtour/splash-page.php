<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>dirtybird BBQ</title>
	
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
	
	<link rel="stylesheet" href="<?php echo esc_url( $this->template_url . 'css/styles.css' ); ?>" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-43260802-1', 'dirtybirdrecords.com');
        ga('send', 'pageview');

    </script>
</head>
<body>
    <div class="continue-notice">
        <h3><a id="wpsp-continue" href="<?php echo esc_url( $this->current_url ); ?>" class="continue">Continue to www.dirtybirdrecords.com</a></h3>       
    </div>
	<div id="container">
        <?php include("body.php") ?>
	</div><!--/container-->
	<footer class="" id="footer">
            <a class="dblogo continue" href="<?php echo esc_url( $this->current_url ); ?>"><span class="screen-reader-text">Dirtybird Records Logo</span></a>
            <h3><a id="wpsp-continue" href="<?php echo esc_url( $this->current_url ); ?>" class="continue">Continue to www.dirtybirdrecords.com</a></h3>
        
    </footer>
</body>
</html>
