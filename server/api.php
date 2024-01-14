<?php
//Header
header("Access-Control-Allow-Origin: *");
$s="localhost";
$u="root";
$p="";
$db="flu2";
$com=new mysqli($s, $u, $p, $db);
//sql
$sql="select * from mytable";
//execution
$kq=$com->query($sql);
//answer
while ($row=$kq->fetch_assoc()) {
    $json = json_encode($row);
}
echo '{"product": '.$json.'}';
$com->close();
?>