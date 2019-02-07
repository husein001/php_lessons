<?php
$a = 1;
$b = 'husein';
$c = true;
$f = 1.1;
$arr = [];
$object = new stdClass();

for ($i = 0;$i < 100; $i+=2){
    $arr[] = $i * 2;
}
echo '<pre>';/
print_r ($arr);
echo '</pre>';
foreach ($arr as $key => $value) {
   // echo '$key{'.$key.'} = $value ['.$value.']<br />';
    if ($key > 0 && $key % 2 == 0){
        echo '$key{'.$key.'} = $value ['.$value.']<br />';
    }
    if($key == 10){
        break;
    echo "";
    }
}

while($k < 100){
    echo 'value $k is'.$k.'<br />';
    $k++;
}

$a = 10 ;

switch ($a){
    case $a < 2;
    break;
    case $a < 10;
    break;
    case 10:
    echo '$a is'.$a;
    default:echo "default case";
    break;
}
$name = 'husein';
$last_name = 'nurkhonov';
$fullname = "$name $last_name";
echo $fullname;
?>