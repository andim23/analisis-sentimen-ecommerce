<?php
include_once 'function/f_informationgain.php';

if (isset($_GET['btsubmit'])) {
  $info_gain = new Information_gain();
  $info_gain->set_jumlah_kata_ya_p();
  $info_gain->set_jumlah_kata_ya_n();
  $info_gain->set_jumlah_semuakata_ya();
  $info_gain->set_jumlah_kata_tidak_p();
  $info_gain->set_jumlah_kata_tidak_n();
  $info_gain->set_jumlah_semuakata_tidak();
  $info_gain->set_entropy_kata_ya();
  $info_gain->set_entropy_kata_tidak();
  $info_gain->entropy_set();
  $info_gain->entropy_kata();
  $info_gain->set_info_gain();
}


?>
