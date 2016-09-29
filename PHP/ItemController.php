<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost","root","", "yatohime_olshop");

$result = $conn->query("SELECT * FROM Item");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"ID":"'  . $rs["ID"] . '",';
    $outp .= '"NAME":"'   . $rs["NAME"]        . '",';
    $outp .= '"STOCK":"'   . $rs["STOCK"]        . '",';
    $outp .= '"TYPE":"'. $rs["TYPE"]     . '"}'; 
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>