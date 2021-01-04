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
function GetPacjenci2(){
    if(isset($_POST['id'])){
        $conn = Connect();
        $id= $_POST['id'];
        $sql1="SELECT imie, nazwisko,choroby_przewlekle, uczulenia FROM pacjenciWHERE id=$id";
        $result = $conn->query($sql1);
        $tab =[];
        while($row = $result->fetch_row()){
            $tab[] = $row;
        }
        $conn->close();
        return $tab;
    }else{
        echo "NIE DZIAŁA";
    }
}
function PacjenciToList2(array $tab){
    $html = "<p>";
    foreach($tab as $row){
        $html .= "Imie i nazwisko: {$row[0]} {$row[1]}<br>";
        $html .= "Choroby przewlekłe: {$row[2]}<br>";
        $html .= "Uczulenia: {$row[3]}<br>";
    }
    return $html."</p>";
}