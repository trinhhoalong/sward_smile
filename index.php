<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Hi! my name's Long</title>
<style>
.heart {
	width: 200px;
	height: 200px;
	top: 50%;
	left: 50%;
	z-index: 1;
	display: block;
	position: absolute;
	transform: translate(-50%,-50%);
	animation: heart 1s ease infinite
}

@keyframes heart {
	96% {
		transform: translate(-50%,-50%) scale(.8,.8)
	}
	100% {
		transform: translate(-50%,-50%) scale(1,1)
	}
}

.heart div {
	background: #ff0000;
	width: 71px;
	height: 126px;
	top: 40px;
	display: block;
	position: absolute;
	border-radius: 50%
	}

.left {
	left: 45px;
	transform: rotate(330deg);
}

.right {
	right: 45px;
	transform: rotate(30deg);
}


</style>
</head>
<body>
	<form action="login.php">
		<h1>
			<center> Hello word!!! </center><br>
			<center>My name is Long</center>
			<div class="heart">
				<div class="left"></div>
				<div class="right"></div>
		  </div>
		</h1>
	</form>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>