<?php


$full_text = isset($_GET['full_text']) ? $_GET['full_text'] : 'WARNING: insert text' ;
$to_remove = isset($_GET['to_remove']) ? $_GET['to_remove'] : 'WARNING: insert a word to remove';

if(str_contains($full_text, $to_remove)) {
  $final_text = str_replace($to_remove , '***', $full_text);
} 
else{
  $final_text = 'Word not included in the text';
}; 


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>INDEX</title>
</head>
<body>
  <div class="my-5 container text-center">

    <div class="pb-4"> <span class="text-success">Your TEXT:</span> <h2><?php echo  $full_text ?></h2> </div>
    
    <div class="pb-4"><span class="text-danger"> Word you REMOVED:</span> <h2><?php echo $to_remove ?></h2> </div>
    
    <div><span class="text-warning" >FINAL RESULT:</span> <h1><?php echo $final_text ?></h1>  </div>
    
    <span class="mt-5"> Text contains <br> <?php echo strlen($final_text) ?> <br> characters. </span>
  </div>
</body>
</html>