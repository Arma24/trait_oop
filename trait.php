<?php 

    trait CobaKursi{
    	public function kursi(){
    		return "Ini adalah kursi";
    	}
    }

    class Kursi{
    	use CobaKursi;
    }

    $kursi = new Kursi();
    echo $kursi->kursi();

//keyword "use" di dalam class digunakan untuk menggunakan trait. bisa menggunakan beberapa trait sekaligus dalam class. 

?>