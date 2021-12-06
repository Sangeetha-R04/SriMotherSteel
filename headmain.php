<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php if($_SERVER['PHP_SELF']=='/service.php'){
    $title = 'Services';
}
else if ($_SERVER['PHP_SELF']=='/contact.php'){
    $title = 'Contact';
}
else if ($_SERVER['PHP_SELF']=='/about.php'){
    $title = 'About Us';
} else {
    $title = 'Home';
}
echo "<title>$title | Sri Mother Sri Industries</title>"

?>

 <link rel="shortcut icon" href="assets/images/logo/favourite-icon.png">

 <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=M+PLUS+1+Code:wght@500;600;700&family=Open+Sans&family=Playfair+Display&family=Proza+Libre:wght@400;800&family=Source+Sans+Pro&display=swap" rel="stylesheet">

	<!-- css include -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/icomoon.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="assets/css/aos.css">

	<!-- custom - css include -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body class="home-architecture">
<!-- backtotop - start -->
	<div id="thetop"></div>
		<div id="backtotop">
			<a href="#" id="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>
<!-- backtotop - end -->

<!-- preloader - start -->
	<div id="preloader"></div>
<!-- preloader - end -->
<?php
include ('header.php')
?>
