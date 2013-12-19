<!DOCTYPE html>
<html lang="<?php echo($lang); ?>">
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta property="og:image" content=""/>
	<link rel="author" href="humans.txt" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Gabriela' rel='stylesheet' type='text/css'>
  	
  	<!-- Frameworks -->
	<link rel="stylesheet" href="//cxms.me/fw/css/normalize.css" />
	<link rel="stylesheet" href="css/foundation.min.css" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/styles.css" media="screen" >

	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/cardicons/favicon.ico">
	
</head>

<body class="">

<h1>Webjac Payment</h1>

<section class="payform">
	<form action="" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_YOEVFccmvVyWCKcwxrUUMKy5"
    data-amount="2000"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-image="/128x128.png">
  </script>
</form>
</section>
		
</body>
</html>