<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chillerlan QR Code generate PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- css -->
  </head>
  <body>
    <div id="container">
      <h2>Chillerlan QR Code PHP</h2>
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <div>
          <input type="text" name="data" placeholder="Texto, URL ou outro tipo de dado">
        </div>
        <div>
          <button type="submit">Generate</button>
        </div>
      </form>
    </div>
  </body>
</html>