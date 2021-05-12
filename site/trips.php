<?php  include('php/php_code.php'); ?>
<?php 

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM trips WHERE id=$id");

		if (mysqli_num_rows($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Trips</title>
        <!-- <link rel="stylesheet" type="text/css" href="css/contact.css"> -->
        <link rel="stylesheet" type="text/css" href="css/trips.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/navbar.css">
    </head>
  <body>
  <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
    <header>
      <div class="main">
        <ul class="header-ul">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="trips.php">Trips</a></li>
          <li><a href="contact.html">Contact</a></li>
		  <li><a href ="php/login/logout.php">Logout</a></li>
        </ul>
      </div>
      
    </header>
    <?php $results = mysqli_query($db, "SELECT * FROM trips"); ?>

<table>
	<thead>
		<tr>
			<th>Name location</th>
			<th>Address location</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
  <?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a href="trips.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="php/php_code.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

    <form method="post" action="php/php_code.php" >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Name location</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Address location</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<?php if ($update == true): ?>
	    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
	    <button class="btn" type="submit" name="save" >Save</button>
        <?php endif ?>
	</form>
  </body>
</html>
