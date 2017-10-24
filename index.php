<?php

class robot{
	
	public $suara;
	public $berat;
	
	public function set_suara($suara){
     $this->suara = $suara;

}	
    public function get_suara(){
	return $this->suara;
	
}
    public function set_berat($berat){
	 $this->berat = $berat;	
}
	public function get_berat(){
	return $this->berat;	
	}
}


$rbt = new robot;
$rtb = new robot;

//var_dump($rbt);

$rbt->set_suara('ngik ngik ngik');
$rbt->set_suara('ngik ngik ngik ngok');
echo 'bunyinya.. '.$rbt->get_suara();

echo '<br>';
$rtb->set_suara('petchu petchu');
echo 'bunyinya.. '.$rtb->get_suara();

echo '<br>';
$rbt->set_berat(5);
$rbt->set_berat(10);
echo 'beratnya.. '.$rbt->get_berat();

echo '<br>';
$rtb->set_berat(15);
echo 'beratnya.. '.$rtb->get_berat();
?>