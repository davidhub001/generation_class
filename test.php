<?php
class Test
{
  private $id;
  private $nom;
  private $prenom;

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

   public function getId(){
    return $this->id;
   }

   public function setId($id){
   $this->id = $id;
   }
  public function getNom(){
    return $this->nom;
   }

   public function setNom($nom){
   $this->nom = $nom;
   }
  public function getPrenom(){
    return $this->prenom;
   }

   public function setPrenom($prenom){
   $this->prenom = $prenom;
   }
}
?>
