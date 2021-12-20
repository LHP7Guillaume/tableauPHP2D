<?php
require_once '../data/array.php';


$id = $_GET['id'];

foreach($arrayGuillaume as $value){
    if($value["id"] == $id ){
        $name = $value["name"];
        $start = $value["start"];
        $end = $value["end"];
        $price = $value["price"];
        $summary = $value["summary"];
        $picture = $value["picture"];
        $place = $value["place"];
        $startdate = date_create($start);
        $startdate = date_format($startdate, 'd/m/y');
        $enddate = date_create($end);
        $enddate = date_format($enddate, 'd/m/y');

    }
}

