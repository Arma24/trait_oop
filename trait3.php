<?php 

    trait Satu{
    	public function sayHello(){
    		echo 'Hello World!';
    	}
    }

    class Dua{
    	use Satu;
    	public function sayHello(){
    		echo 'Good Morning';
    	}
    }

    $a = new Dua();
    $a->sayHello();

?>