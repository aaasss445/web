<!DOCTYPE html>
<?php
function listPrint() {
  $list = scandir("./data");
  $i = 0;
  while($i<count($list)){
    if ($list[$i] != "." and $list[$i] != ".."){
        $nowlist = substr($list[$i], 2);
        echo "<li><a href=\"html.php?id=$list[$i]\">$nowlist</a></li>\n";
      }
    $i = $i + 1;
  }
}
function buttonPrint() {
  $list = scandir("./data");
  $p = "";
  $n = "";
  $i = 0;
  while($i < count($list)){
      if ($_GET['id'] == $list[$i]){
        if ($list[$i - 1] != "." and $list[$i - 1] != ".."){
          $p = $list[$i - 1];
        }
        else {
          $p = $list[$i];
        }
        if (empty($list[$i + 1]) != 1){
          $n = $list[$i + 1];
        }
        else {
          $n = $list[$i];
        }
        echo "<a href='html.php?id=" . "$p" . "' class='button-l'>이전</a>";
        echo "<a href='html.php?id=" . "$n" . "' class='button-r'>다음</a>";
      }
    $i = $i + 1;
  }
}
function titlePrint() {
  $title = substr($_GET['id'], 2);
  echo $title;
}
function contents() {
  $file = "";
  $fp = fopen("./data/".$_GET['id'], "r") or die("파일을 열 수 없다.");
  while(!feof($fp)){
    echo fgets($fp);
  }
  fclose($fp);
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>웹 사전 - <?php titlePrint() ?></title>
    <link rel="stylesheet" href="pagestyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="test.js"></script>
  </head>


  <body>
    <div id="headgrid">
      <h1><a href="test.php">웹 사전</a></h1>
    </div>

    <div id="grid">
      <ul id="list">
        <h3>HTML</h3>
        <?php
        listPrint();
         ?>
      </ul>
      <div id="contents">
        <div class="heading">
          <h1 id="chapter">
            <?php
            titlePrint();
            ?>
          </h1>
          <?php
          buttonPrint();
          ?>

        </div>
        <hr>
        <?php
        contents();
        ?>
      </div>
    </div>
  </body>
</html>
