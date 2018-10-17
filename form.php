<?php 
if(isset($_GET['submit'])){
$var = $_GET['option1'];
if(isset($var)){
  echo "<h1>Successfully Recieved Option1</h1>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GeeksforGeeks Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form control: checkbox</h2>
  <p>The form below contains one checkbox.</p>
  <form method="get">
    <div class="checkbox">
      <label><input type="checkbox" name = "option1" value="Option 1">Option 1</label>
    </div>
      <label><button name="submit" value="true" class="btn btn-default">SUBMIT OPTION1</button>
    </div>
  </form>
</div>
</body>
</html>

