<?php
$tahun =2020;
if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
  echo "$tahun adalah tahun kabisat.";
} else {
  echo "$tahun bukan tahun kabisat.";
}
?>