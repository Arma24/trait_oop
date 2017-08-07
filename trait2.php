<?php 

    class Satu{
    	public function dua(){
    		echo 'Hello';
    	}
    }

    trait Tiga{
    	public function dua(){
    		parent::dua();
    		echo 'World!';
    	}
    }

    class Empat extends Satu{
    	use Tiga;
    }

    $a = new Empat();
    $a->dua();

?>