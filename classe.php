<?php
$table = (string)readline("Entrer la table ex: nomtable(champ,..,champ) : ");
$i ="\t";
preg_match_all('/(.*)\((.*)\)/', $table, $reg_table);
$nom_class = $reg_table[1][0].'.php';
$classe_name = $reg_table[1][0];
$text = "<?php\n";
$text .= "class ".ucwords($classe_name)."\n";
$text .= "{\n";
$champ = explode(',',$reg_table[2][0]);
foreach($champ as $cles=>$val):
    $text .= "$i private $".$val.";\n";
endforeach;
$text .= "\n ";
$text .= "$i public function __construct(array \$data){\n";
$text .= "$i $i \$this->hydrate(\$data);\n";
$text .= "$i }\n";
$text .= "$i public function hydrate(array \$data){\n";
$text .= "$i $i foreach(\$data as \$key => \$value){ \n";
$text .= "$i $i $i \$methode = 'set'.ucwords(\$key); \n";
$text .= "$i $i $i if(method_exists(\$this,\$methode)){ \n";
$text .= "$i $i $i $i \$this->\$methode(\$value); \n";
$text .= "$i $i $i }\n";
$text .= "$i $i }\n";
$text .= "$i }\n";
$text .= "\n ";
foreach($champ as $key=>$val):
    $text .= "$i public function get".ucwords($val)."(){\n";
    $text .= "$i $i return \$this->$val;\n";
    $text .= "$i }\n";
    $text .= "\n ";
    $text .= "$i public function set".ucwords($val)."($$val){\n";
    $text .= "$i $i \$this->$val = $$val;\n";
    $text .= "$i }\n";
endforeach;
$text .= "}\n?>";
file_put_contents($nom_class,$text);
