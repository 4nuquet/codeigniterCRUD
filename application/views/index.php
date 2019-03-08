<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inventory</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<div class="container mt-4">
		<div class="container d-flex m-2 justify-content-between">
			<div class="form-group">
				<input id="findItem" type="text" class="form-control" placeholder="Buscar producto">
			</div>
			<button class="btn btn-dark btn-sm" data-toggle="modal" data-target="#modalItem">Crear Producto</button>
		</div>
		<div id="app" class="container m-2">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th>Producto</th>
						<th>Bodega</th>
						<th>Cantidad</th>
						<th>Estado</th>
						<th>Gestion</th>
					</tr>
				</thead>
				<tbody id="item-list">
				</tbody>
			</table>
			<nav id="pag">

			</nav>
		</div>
	</div>

<?php include("layouts/modal.php") ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>
</html>