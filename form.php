



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>PHP Badwords</title>
</head>
<body>
  <div class="container my-5">

    <form action="index.php" method="GET">
      <div class="form-group">
        <label for="full_text">TEXT</label>
        <input type="text" class="form-control" id="full_text" aria-describedby="emailHelp" name="full_text" placeholder="Enter text">
        
      </div>
      <div class="form-group">
        <label for="to_remove">Word you want to remove</label>
        <input type="text" class="form-control" id="to_remove" name="to_remove" placeholder="enter word to remove">
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</body>
</html>