<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Bone Collection - Enter </title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
</head>

<body>
<div id="container">

<h1>Enter Another Body Part</h1>

<p class="middle"><a href="inventory.php">View full list</a></p>
  <p> Return <a href="index.php"> home</a>. </p>

<div id="bones">

<form id="boneform" method="post" autocomplete="off">
<!-- autocomplete="off" ensures form will be empty if user clicks
     the browser's Back button -->
    <label for="name">Name </label>
	<input type="text" name="name" id="name" maxlength="20" required>


    <label for="action">Action </label>
	<input type="text" name="action" id="color" maxlength="20" required>

    <label for="section">Section </label>
    <select name="section" id="section" required>
        <option value="head">head</option>
        <option value="core">core</option>
        <option value="arm">arm</option>
        <option value="leg">leg</option>

    </select>

    <label for="number">Number of Bones </label>
	<input type="number" name="number" id="number" max="99" required>
    <!-- step="0.01" (above) allows decimal to be entered -->

	<input type="submit" id="submit" value="Submit">
</form>

</div>

<div id="response">
    <p class="announce">Thanks for submitting!</p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div> <!-- close container -->
</body>
</html>
