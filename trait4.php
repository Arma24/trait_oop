<?php 

    trait Satu{
    	public function sayGood(){
    		echo 'Good ';
    	}
    }

    trait Dua{
    	public function sayMorning(){
    		echo 'Morning';
    	}
    }

    class Tiga{
    	use Satu, Dua;
    	public function empat(){
    		echo '!';
    	}
    }

    $a = new Tiga();
    $a->sayGood();
    $a->sayMorning();
    $a->empat();

?>