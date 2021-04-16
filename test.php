<?php
class Test
{
	 private $a;
	 private $b;
	 private $c;

 	 public function __construct(array $data){
	 	 $this->hydrate($data);
	 }
	 public function hydrate(array $data){
	 	 foreach($data as $key => $value){ 
	 	 	 $methode = 'set'.ucwords($key); 
	 	 	 if(method_exists($this,$methode)){ 
	 	 	 	 $this->$methode($value); 
	 	 	 }
	 	 }
	 }

 	 public function getA(){
	 	 return $this->a;
	 }

 	 public function setA($a){
	 	 $this->a = $a;
	 }
	 public function getB(){
	 	 return $this->b;
	 }

 	 public function setB($b){
	 	 $this->b = $b;
	 }
	 public function getC(){
	 	 return $this->c;
	 }

 	 public function setC($c){
	 	 $this->c = $c;
	 }
}
?>