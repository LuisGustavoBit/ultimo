<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

<!-- Latest compiled and minified JavaScript -->


<style type="text/css">
	
	.modal-header-store{
		padding: 9px 15px;
		border.bottom: 1px solid #eee;
		background-color: #0480be;

		-webkit-bottom-top-left-radius: 5px;
		-webkit-bottom-top-right-radius:5px;
	-moz-border-radius-topleft:5px;
	-moz-border-radius-topright:5px;
	border-top-left-radius:5px;
	border-top-right-radius:5px;


	}
	.modal-title{

		color:#fff;
	}
</style>
	<title>Laravel6 with ajax</title>
</head>

<body>
	<nav class="navbar navbar-default navbar-static-top">
		 <div class="container">
		 	<div class="navbar-header">
		 		
		 	</div>
		 	

		 </div>
	</nav>

	<div class="container">
		@yield('content')
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@yield('scripts')

	

</body>
</html>