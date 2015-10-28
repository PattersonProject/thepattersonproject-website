	<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/pattersonproject.css">
	<link rel="stylesheet" type="text/css" href="css/navigation.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> <!--favicon-->

	<script type="text/javascript" src="javascript/jquery-2.1.4.min.js"></script>
	

	<script type="text/javascript">
		//iamhere navigation
            $(document).ready(function() {
                var bodyid = $('body').attr('id');
                console.log(bodyid);
                var navid = '#nav' + bodyid;
                console.log(navid);
                $(navid).attr('id', 'iamhere');
            });
	</script>