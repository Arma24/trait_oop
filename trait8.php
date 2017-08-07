<?php 

    trait First{
    	public function firstFunction(){
    		echo "Contoh trait ke delapan";
    	}
    }

    class Hai{
    	use First;
    }

    $a = new Hai();
    $a->firstFunction();

?>