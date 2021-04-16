<?php
include 'test.php';
class TestManager
{
 private $testa;
   public function getInsert(Test $test){
    echo ' insert reusit '.$test->getNom()."\n";
   }
}
$monclient = array('id'=>'001','nom'=>'david','prenom'=>'le fou');
$client = new Test($monclient);
$af = new TestManager();
$af ->getInsert($client);
echo $client->getNom();
?>
