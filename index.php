<?php
$file = fopen("poem.txt", "r");
$arr = [];
// while(!feof($file)) 
// { 
//     $arr[] = fgets($file); 
// }

$arr = file("poem.txt") ;
$path = "path_poem";
if (!is_dir($path)) {
    mkdir($path);
   }
//print_r($arr);

$str_b = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>';
$str_e = '</body>
</html>';

$p = fopen($path."/poem.html", "w");
fwrite($p, $str_b);
//fwrite($p, "1111");
foreach($arr as $i => $a){
    if($i==0){
        fwrite($p, "$a<br />");

    }
    else
    fwrite($p, "$a<br />");
}
fwrite($p, $str_e);
