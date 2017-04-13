<?php
  $sx = rand(0, 100);
  echo "selected number: {$sx} ";
  $var1 = 1;
  $var2 = 1;

  while (true) {
    if ($var1 > $sx) {
      echo "задуманное число не входит в числовой ряд <br/>";
      die;
    } else {
      if ($var1 == $sx) {
        echo "задуманное число входит в числовой ряд <br/>";
        die;
      } else {
        $var3 = $var1;
        $var1 += $var2;
        $var2 = $var3;
      }
    }
  }
?>
