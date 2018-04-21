
<?php 
include_once '../config.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Crearemos una aplicación sencilla que conecte con la base de datos, pero para que no quede tan mal visto, usaremos un bootstrap. -->
	<title>Blog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Title</h1>
			</div>
		</div>
		<div class="row">
				
				<div class="col-md-8">
				<h2>New Posts</h2>
				<a class ="btn btn-default" href="posts.php">Back</a>

				<form action="insert-post.php" method="post">
					<div class="form-group">
						<label for="inputTitle">Title</label>
						<input type="text" class="form-control" name="title" id="inputTitle">
					</div>
					<textarea class="form-control" name="content	id="inputContent rows="5"></textarea>
					<br>
					<input class="btn btn-primary" type="submit" name="Save">
				</form>				
				</div>
				<div class="col-md-4">
					Sidebar: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<footer>
				This is a footer<br>
				<a href="admin/index.php">Admin Panel</a>
			</footer>
			</div>
			
		</div>
	</div>
</body>
</html>