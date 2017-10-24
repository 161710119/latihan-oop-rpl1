<?php

require_once 'index3.php';


$rtb = new robot('ngik ngok ngok',20);
//$rtb->set_berat('210');
//$rtb->set_suara('ngok ngok ngok');
//var_dump($rbt);

echo 'beratnya.. '.$rtb->get_berat();

echo '<br>';
echo 'suaranya.. '.$rtb->get_suara();
?>