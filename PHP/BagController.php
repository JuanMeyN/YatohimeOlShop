<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost","root","", "yatohime_olshop");

$result = $conn->query("SELECT * FROM bag");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"NAME":"'  . $rs["NAME"] . '",';
    $outp .= '"PRICE1":"'   . $rs["PRICE1"]        . '",';
    $outp .= '"PRICE2":"'   . $rs["PRICE2"]        . '",';
    $outp .= '"PRICE3":"'   . $rs["PRICE3"]        . '",';
    $outp .= '"PRICE4":"'   . $rs["PRICE4"]        . '",';
    $outp .= '"PRICE5":"'   . $rs["PRICE5"]        . '",';
    $outp .= '"PRICE5":"'   . $rs["PRICE6"]        . '",';
    $outp .= '"HET":"'. $rs["HET"]     . '"}'; 
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>