<?php
$table = (string)readline("Entrer le table ex: nomtable(champ,..,champ) : ");
preg_match_all('/(.*)\((.*)\)/', $table, $reg_table);
$nom_class = $reg_table[1][0].'.php';
$class_name = $reg_table[1][0];
$text = "<?php\n";
$text .= "class ".ucwords($class_name)."\n";
$text .= "{\n";
$champ = explode(',',$reg_table[2][0]);
foreach($champ as $cles=>$val):
$text .=  "\t private $".$val.";\n";
endforeach;
$text .= "}\n?>";
file_put_contents($nom_class,$text);

