<?php 

    trait Hai{
    	function sayHai(){
    		echo "Haiii, ";
    	}
    }

    trait Ucapan{
    	function sayUcapan(){
    		echo "Selamat Siang";
    	}
    }

    class MyWorld{
    	use Hai, Ucapan;
    }

    $a = new MyWorld();
    $a->sayHai() . " " . $a->sayUcapan();

?>