<?php 
if (isset($_GET["anggrek"]) && isset($_GET["kamboja"]) && isset($_GET["lotus"])) {
    $anggrekStreet = $_GET["anggrek"]; //so this is where the value assigned to the variables 
    $kambojaStreet = $_GET["kamboja"];//-,-
    $lotusStreet = $_GET["lotus"]; //-,-
}else {
    $anggrekStreet = 0; //so this is where the value assigned to the variables 
    $kambojaStreet = 0;
    $lotusStreet = 0 ;
}

$jalanAnggrek = $anggrekStreet * 1000;  //so basically kalau mau make it count and set it to 0 , maka variable nya harus diganti jadi sesaui input
$jalanKamboja = $kambojaStreet;
$jalanLotus =  $lotusStreet / 100;
$materialCost = 15000;
$workFee = 650;

$totalStreetLength = $jalanAnggrek + $jalanKamboja + $jalanLotus;
$totalMaterial =  $totalStreetLength * $materialCost;//19875000
$totalWork = $totalStreetLength * $workFee; //861250
$totalAll = $totalWork + $totalMaterial;

$isCashReady = false;
if ($isCashReady) {
    $status = "the project will be implemented soon!"; //evaluates true boolean  //The purpose of the if statement is to check a condition and execute specific code based on whether the condition is true or false. In this case, since $isCashReady is false, the code follows the logic in the else block.
    $color = "green";
   
} else{ //evaluates false boolean
    $status = "The project will be postponed until the funds are available! ";
    $color = "red";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleif.css">
    <title>Document</title>
</head>
<body>

<br>
<section>

<div class="cost">
    <div class="form">
<form action=""method="GET" >
<br>
<div class="julun">
<div class="jalan">
<label class="anggrek" for = "anggrek">Jalan Anggrek<b>(Km)</b></label>
<input class="anggrek-inp"type="number" step="0.05" name="anggrek" id="anggrek">
<br>
<label class="kamboja" for ="kamboja">Jalan Kamboja <b>(M)</b></label>
<input class="anggrek-inp" type = "number" name="kamboja" id="kamboja">
<br>
<label class="lotus" for = "lotus">Jalan Lotus <b>(Cm)</b></label>
<input type="number" name="lotus" id="lotus".>

</div>
</div>
<button class="submit" type="submit" > Count </button>
</form>
    </div>
    
<div class="text">
    <div class="real">
<p >To carry out road repairs with a total length of <?=$totalStreetLength?> meters, 
    Perumahan Graha Sentosa must prepare a total cost of Rp <?=$totalAll?>.</p>
<h1 class="real1">Project Status : </h1>  <p><span style ="color:<?=$color?>"><?=$status?></span></p> <!--done-->
</div>
</div>
</div>

</section>



</body>
</html>