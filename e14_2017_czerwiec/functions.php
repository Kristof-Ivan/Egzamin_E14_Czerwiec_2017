<?php
function Connect(){
    $conn = new mysqli("localhost", "root", null, "przychodnia");
    if($conn->connect_errno !=0) return null;
    $conn -> query("SET NAMES utf8");
    return $conn;
}
function GetPacjenci():array{
    $conn = Connect();
    $sql = "SELECT id, imie, nazwisko FROM pacjenci";
    $dane = [];
    $result = $conn->query($sql);
    while($row = $result->fetch_row()){
        $dane[] = $row;
    }
    $conn->close();
    return $dane;
}
function PacjenciToList(array $dane):string{
    $html = "<p>";
    foreach($dane as $row){
        $html .= "{$row[0]} {$row[1]} {$row[2]}<br>";
    }
    return $html."</p>";
}
