<?php
include 'test.php';
class TestManager
{
	private $db;
	public function __construct($db){
		$this->setDb($db);
	}
	public function setDb(PDO $db){
		$this->db = $db;
	}
	public function addTest(Test $test){
		$query = $this->db->prepare('INSERT INTO test VALUES(:id,:nom,:prenom)';
		$query->bindValue(':id',$test->getId());
		$query->bindValue(':nom',$test->getNom());
		$query->bindValue(':prenom',$test->getPrenom());
		$query->execute();
	}
	public function deleteTest(Test $test){
		$this->db->exec('DELTE FROM test WHERE id = '.$test->getId());	
	}
	public function updateTest(Test $Test){
		$query = $this->db->prepare('UPDATE test SET nom = :nom WHERE id = :id');
		$query->bindValue(':id',$test->getId());
		$query->bindValue(':nom',$test->getNom());
		$query->execute();
	}
	public function selectAllTest(){
		return $this->db->query('SELECT * FROM test');
	}
	public function selectByIdTest($id){
		return $this->db->query('SELECT * FROM test WHERE id = '.$id);	
	}	
}
?>
