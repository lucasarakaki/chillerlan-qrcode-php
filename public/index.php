<?php

require "../vendor/autoload.php";

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

if (isset($_POST["data"])) {
    $data = $_POST["data"];
    $name = uniqid() . ".jpg";
    $dir = "./files/{$name}";

    $options = new QROptions([
        'version' => 5, //versao do QRCode
        'eccLevel' => QRCode::ECC_L, //Error Correction Feature Level L
        'outputType' => QRCode::OUTPUT_IMAGE_JPG, //setando o output como JPG
        'imageBase64' => false, //evitando que seja gerado a imagem em base64
    ]);

    file_put_contents($dir, (new QRCode($options))->render($data)); //salvando a imagem como jpg
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chillerlan QR Code generate PHP</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"> <!-- css -->
  </head>
  <body>
    <div id="container">
      <h2>chillerlan/php-qrcode</h2>
      <p>QR Code Generator with PHP</p>
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <div>
          <input type="text" name="data" placeholder="Text, URL or other type of data">
        </div>
        <div>
          <input type="submit" value="Generate">
        </div>
        <?php
if (isset($_POST["data"])) {
    echo "<p>";
    echo "QR Code gerado!<br>";
    echo "<a href='{$dir}' target='blank'>Visualizar</a>";
    echo "</p>";
}
?>
      </form>
    </div>
  </body>
</html>