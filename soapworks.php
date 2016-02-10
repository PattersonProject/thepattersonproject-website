<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Michael Patterson Project Manager </title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<?php include("include/head.php");?> 
	</head>


	<body id="home">


		<?php include ("include/header.php");?>

		<div id="content">
			<h1>Patterson Soapworks</h1>
				<p>Live deployement: <a href="http://soapworks-mpatterson.rhcloud.com/">http://soapworks-mpatterson.rhcloud.com/</a><br />Github: <a href="https://github.com/PattersonProject/SoapWorks">https://github.com/PattersonProject/SoapWorks</a></p>
				<p>This is a customer facing website for a fictional, artisanal soap company. The goal is to highlight certain products and easily allow customers to browse the options, or fill in a form for custom orders. The pages are designed to be scaled for viewing on a variety of screens. The input on any form (including the &lsquo;add to cart&rsquo; form) is simply echoed back by a script on the Harvard Morpheus server to test functionality. This project started as part of classwork for Fundamentals of Website Design at Harvard Extension, and has been expanded since the course ended.</p>
				<p>Overall I was happy with the way this site turned out. &nbsp;I was, perhaps, a little over eager with background images and textures but I gained experience on sizing and editing backgrounds.&nbsp; Using the PHP includes for product previews made me look forward to learning about content management and methods for dynamically updated a site like this.</p>
				<h2>Features</h2>
				<ul>
				<li>Each of the product preview boxes will show an expanded view using the Fancybox JQuery plugin when the 'Quick Look' button is clicked.</li>
				<li>These product preview boxes are all dropped in using a PHP include which allows for them to be updated and changed quickly as needed.</li>
				<li>The 'Add to Cart' buttons forward the quantity to an echo script on Harvard's Morpheus server which will return the variables sent.</li>
				<li>The 'Request a Quote' page utilizes the same script to echo the form data.</li>
				<li>The 'Request a Quote' form uses an accordion plugin from twitter Bootstrap using Javascript. If Javascript is disabled the form will display fully.</li>
				<li>'Contact Us' and 'Your account' are not implemented at this time.</li>
				</ul>
				<h2>ToDo</h2>
				<ul>
				<li>Change main background image to something that makes text more readable</li>
				<li>Create a proper 'Contact Us' page</li>
				<li>Add better form validation for 'Request a Quote' form</li>
				<li>Research shopping cart plugins</li>
				<li>Add user account functionality</li>
				</ul>
		</div>

		<br><br><br>

		<?php include("include/footer.php");?>
		
	</body>
</html>