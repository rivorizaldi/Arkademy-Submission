<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>Soal No 7</title>
  </head>

  <?php
	include ('connect.php');
?>


  <body>
	<h1>Soal No 7</h1>
	
	<div class="container">

	<div class="row">
		<a href="tambah.php" class="mb-3 btn btn-success">Tambah Category</a>
	<table class="table">
      <thead>
        <tr>
          <th scope="col">Category ID</th>
          <th scope="col">Category Name</th>
          <th scope="col">Products</th>
        </tr>
      </thead>
      <tbody>

	<?php
	$sql  = 'SELECT categories.id, categories.name AS category_name, GROUP_CONCAT(products.name SEPARATOR \',\') AS products FROM categories INNER JOIN products ON categories.id = products.category_id GROUP BY categories.id,categories.name';
	$result =  $conn->query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){ 
	?>
		<tr>
			<td> <?php echo $row["id"]; ?> </td>
			<td> <?php echo $row["category_name"]; ?> </td>
			<td> <?php echo $row["products"]; ?> </td>
			</tr>
	<?php	}
	} ?>
      </tbody>
    </table>
	</div>
	</div>

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>