<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <input type="submit" name="name" value="Go To Page">
    </form>
  <?php
 if(isset($_GET['name'])){
    header("location:A1.php");
 }
  ?>
</body>
</html>