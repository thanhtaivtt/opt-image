<?php 
require_once 'opt.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nén ảnh</title>
</head>
<style type="text/css" media="screen">
	.box{
		width: 1000px;
		margin: 0 auto;
	}
	p{
		background-color: #dddddd;
		padding: 15px;
		font-size: 20px;
		text-align: center;
		font-weight: bold;
		color: red;

	}
	.left{
		float: left;
		max-width: 470px;
	}
	.right{
		float: right;
		max-width: 470px;
	}
	.left img{
		max-width: 470px;
	}
	.right img{
		max-width: 470px;
	}
</style>
<body>
	<div class="box">
		<div class="left">
			<p>Cũ (281KB)</p>
			<img src="ex-0.jpg" alt="old">
		</div>
		<div class="right">
			<p>Mới (17KB)</p>
			<img src="<?php echo opt('ex-0.jpg',null,10); ?>" alt="old">
		</div>
	</div>
</body>
</html>