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
					<h2>Posts</h2>
					<p><a class ="btn btn-primary" href="<?php echo BASE_URL;?>admin/posts/create">New Post</a></p>
					<table class="table">
						<tr>
							<th>Title</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<!-- <?php 
						// foreach ($blogPosts as $blogPost) {
						// 	echo '<tr>';
						// 	echo '<td>' . $blogPost['title'] . '</td>';
						// 	echo '<td>Edit</td>';
						// 	echo '<td>Delete</td>';

						// 	echo '</tr>';
						// } Modelo como en la clase.
				 	 ?>	 -->

				 	 <?php foreach ($blogPosts as $blogPost): ?>
						<tr>
						<td> <?= $blogPost['title'] ?></td>
						<td>Edit</td>
						<td>Delete</td>
						</tr>
					<?php endforeach?>	
					</table>
				 	
				</div>
				<div class="col-md-4">
					Sidebar: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<footer>
				This is a footer<br>
				<a href="<?php echo BASE_URL;?>admin">Admin Panel</a>
			</footer>
			</div>
			
		</div>
	</div>
</body>
</html>