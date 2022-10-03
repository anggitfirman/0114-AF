<?php
//class mobil
Class Mobil{
      public $nama;
      public $merk;
      public $a;
  
      function getInfo(){
            echo "Nama mobil: ".$this->nama."<br/>";
            echo "Merk: ".$this->merk."<br/>";
	    echo "warna: ".$this->a."<br/>";
      }
}

//bagian main
$ferari=new Mobil();
$ferari->nama="xxx";
$ferari->merk="aaa";
$ferari->a="hitam";
$ferari->getInfo();
?>

Jadi bisa disimpulkan bahwa method overload merupakan kumpulan beberapa method dengan nama yang sama namun memiliki parameter yang berbeda
