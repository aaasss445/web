<!DOCTYPE html>
<?php
function listPrint() {
  $list = scandir("./data");
  $i = 0;
  while($i<count($list)){
    if($list[$i] != "."){
      if($list[$i] != ".."){
        $nowlist = substr($list[$i], 2);
        echo "<li><a href=\"html.php?id=$list[$i]\">$nowlist</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>웹 사전</title>
    <link rel="stylesheet" href="indexstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="test.js"></script>
  </head>


  <body>
    <div id="headgrid">
      <h1><a href="test.php">웹 사전</a></h1>
      <!-- <input type="button" value="night" onclick="night_day(this);"> -->
    </div>

    <div id="grid">
      <ul class="m">
        <h3>HTML</h3>
        <?php
        listPrint();
        ?>
      </ul>
      <div>

      </div>
    </div>
  </body>
</html>
