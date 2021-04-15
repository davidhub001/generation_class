<?php
$table = (string)readline("Entrer le table ex: nomtable(champ,..,champ) : ");
$i =" ";
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
foreach($champ as $key=>$val):
    //$text .= '/*geters*/'."\n";
    $text .= "$i public function get".ucwords($val)."(){\n";
    $text .= "$i $i return ".'$this->'.$val.";\n";
    $text .= "$i $i}\n";
    //$text .= '/*seters */'."\n";
    $text .= "$i public function set".ucwords($val)."($".$val."){\n";
    $text .= "$i $i".'$this->'.$val." = $".$val.";\n";
    $text .= "$i $i}\n";
endforeach;
$text .= "}\n?>";
file_put_contents($nom_class,$text);
