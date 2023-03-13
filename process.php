<?php 
/*
$fp = fopen($filename, "r");
while($data = fgetcsv($fp)){
    printf("Name : %s\nAge : %s\nClass : %s\nRoll : %s \n\n", $data[0],$data[1],$data[2],$data[3], $data[4]);
}
fclose($fp); 



$fp = fopen($filename, "w");
foreach($students as $student){
    fputcsv($fp, $student);
}
fclose($fp); 

$fp = fopen($filename, "r");
while($data = fgetcsv($fp)){
    printf("Name : %s\nAge : %s\nClass : %s\nRoll : %s \n\n", $data[0],$data[1],$data[2],$data[3], $data[4]);
}
fclose($fp); 