<?php


$full_text = isset($_GET['full_text']) ? $_GET['full_text'] : 'WARNING: insert text' ;
$to_remove = isset($_GET['to_remove']) ? $_GET['to_remove'] : 'WARNING: insert a word to remove';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INDEX</title>
</head>
<body>
  <h1><?php echo  $full_text ?></h1>
  <h2><?php echo $to_remove ?></h2>
</body>
</html>