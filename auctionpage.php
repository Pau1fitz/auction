<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="./auction.css" rel="stylesheet">

</head>
  <body>
    <div class="container">
      <?php
        $json = file_get_contents('auction.json');
        $json = json_decode($json);

        foreach($json as $obj){

          echo "<div class='row'>";

            echo "<p>" .$obj->description . "</p>";

            for ($x=0; $x < count($obj->fileNames); $x++) {

              if($x % 2 === 0) {
                 echo "<img class='col-md-4' src=auction-images/" .$obj->fileNames[$x] . ">";
              } else {
                 echo "<img class='col-md-8' src=auction-images/" .$obj->fileNames[$x] . ">";
              }
            }

          echo "</div>";

        }
        ?>

      </div>



    </body>
</html>
