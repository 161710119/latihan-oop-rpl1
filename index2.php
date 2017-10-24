<?php
{
class kendaraan{
	
	public $motor = 'tit tit tit';
	public $sepeda = 'kring kring kring';
	
	public function motornya()
	{
	   echo $this->motor;	
	}
	
	public function sepedanya()
	{
	   return $this->sepeda .'<br>';
	}
}

$knd = new kendaraan;

//var_dump($knd);
$knd->motornya();
echo '<br>'.$knd->sepedanya();

}
echo "<br />";
{
class game{
	
	public $nama_game = 'pes 2018';
	public $kapasitas = 8;
	
	public function gamenya()
	{
	   echo $this->nama_game;	
	}
	
	public function kapasitasnya()
	{
	   return $this->kapasitas;
	}
	
	public function tambahkapasitas()
	{
		$a = 8;
	   return $a + $this->kapasitas .'<br>';
	}
	
	public function gamelagi()
	{
		for ($i=0; $i <5; $i++){
			echo $this->nama_game .'<br>';
		}
	}
}

$gm = new game;

//var_dump($gm);
$gm->gamenya();
echo '<br>'.$gm->kapasitasnya();
echo '<br>'.$gm->tambahkapasitas();
echo '<br>'.$gm->gamelagi();
}
echo "<br />";
{
class musik{
	
	public $shawn = 'mercy';
	public $kodaline = 'raging';
	
}

$msk = new musik;

//var_dump($msk);
echo "lagu shawn mendes : ".$msk->shawn;
echo "<br />";
echo "lagu kodaline : ".$msk->kodaline;
}
echo "<br />";
{
class barang{
	
	public $nama_barang = 'playstation3';
	public $harga = 3500000;
}

$brg = new barang;

//var_dump($brg);
echo "nama barang : ".$brg->nama_barang;
echo "<br />";
echo "harganya : ".$brg->harga;
}
echo "<br />";
{
class jurusan{
	
	public $jurusan1 = 'rpl';
	public $jurusan2 = 'tkr';
}

$jrs = new jurusan;

//var_dump($jrs);
echo "nama jurusan pertama : ".$jrs->jurusan1;
echo "<br />";
echo "nama jurusan kedua : ".$jrs->jurusan2;
}
?>

