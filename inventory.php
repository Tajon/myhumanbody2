<?php include 'database.php'; ?>
<?php
	$query = "SELECT * FROM body ORDER BY name";
	$body = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Sock Market Inventory </title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<div id="container">

<h1>Bone Collection</h1>

<p class="middle">This page has only a table. There is no form.</p>

<div id="btable">
<table>

    <tr>
        <th>Name</th>
        <th>Action</th>
        <th>Section</th>
        <th>Number</th>
    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($body)) :  ?>

<tr>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['action']; ?></td>
	<td><?php echo $row['section']; ?></td>
	<td><?php echo $row['number']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>
</div>

<!-- <p class="middle"><a href="enter_new_record.php">Add socks</a>: Open the sock entry form.</p> -->

</div> <!-- close container -->
</body>
</html>
