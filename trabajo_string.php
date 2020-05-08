<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
, initial-scale=1.0">
    <title>Document</title>

    <style>

    .resaltar{
        color:#F00;
        font-weight:bold;
    }

</style>
</head>
<body>

<?php 

$variable1="casa";
$variable2="CASA";

$resultado=strcmp($variable1,$variable2); 

if($resultado){
    echo "no coinciden";
}else {
    echo "si tal";
}

?>

</body>
</html>